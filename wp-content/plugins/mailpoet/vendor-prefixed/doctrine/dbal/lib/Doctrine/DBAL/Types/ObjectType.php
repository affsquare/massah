<?php
 namespace MailPoetVendor\Doctrine\DBAL\Types; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform; use function is_resource; use function restore_error_handler; use function serialize; use function set_error_handler; use function stream_get_contents; use function unserialize; class ObjectType extends \MailPoetVendor\Doctrine\DBAL\Types\Type { public function getSQLDeclaration(array $fieldDeclaration, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return $platform->getClobTypeDeclarationSQL($fieldDeclaration); } public function convertToDatabaseValue($value, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return \serialize($value); } public function convertToPHPValue($value, \MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { if ($value === null) { return null; } $value = \is_resource($value) ? \stream_get_contents($value) : $value; \set_error_handler(function (int $code, string $message) : void { throw \MailPoetVendor\Doctrine\DBAL\Types\ConversionException::conversionFailedUnserialization($this->getName(), $message); }); try { return \unserialize($value); } finally { \restore_error_handler(); } } public function getName() { return \MailPoetVendor\Doctrine\DBAL\Types\Type::OBJECT; } public function requiresSQLCommentHint(\MailPoetVendor\Doctrine\DBAL\Platforms\AbstractPlatform $platform) { return \true; } } 