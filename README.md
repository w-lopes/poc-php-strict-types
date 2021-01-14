# POC PHP Type Check

Enforce type declaration on classes methods.

## Dependencies
 * [gskema/phpcs-type-sniff](https://github.com/gskema/phpcs-type-sniff)
 * [squizlabs/PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer)

## Usage
```bash
# Install dependencies
composer install
# Run sniffer
php vendor/bin/phpcs
```
#### Output example
```
FILE: /path-to-project/src/ArugulaWithoutTypes.php
--------------------------------------------------------------------------------------
FOUND 4 ERRORS AFFECTING 2 LINES
--------------------------------------------------------------------------------------
 11 | ERROR | Add type declaration for parameter $a or create PHPDoc with type hint
 11 | ERROR | Add type declaration for return value or create PHPDoc with type hint
 20 | ERROR | Add type declaration for parameter $q, e.g.: "array"
 20 | ERROR | Add type declaration for return value, e.g.: "void"
--------------------------------------------------------------------------------------

Time: 57ms; Memory: 6MB
```

#### My phpcs.xml
```xml
<?xml version="1.0"?>
<ruleset name="ruleset">
    <description>Rules</description>
    <autoload>./vendor/autoload.php</autoload>
    <file>src</file>
    <arg name="extensions" value="php"/>
    <arg name="colors" />
    <rule ref="PSR12">
        <exclude name="Generic.Files.LineLength"/>
    </rule>
    <rule ref="./vendor/gskema/phpcs-type-sniff/src/Sniffs/CompositeCodeElementSniff.php">
        <properties>
            <property name="reportType" value="error" />
            <property name="useReflection" value="true"/>
        </properties>
    </rule>
</ruleset>
```
