# datetime

### Installation

The install command reads the composer.json file from the current directory, resolves the dependencies, and installs them into vendor.

```sh
$ composer install
```

### Running PHPUnit

```sh
$ vendor/bin/phpunit
```

### Configure git

Add the *Proxy* address and ignore *Eclipse for PHP Developers* project files settings to `.gitconfig`

```sh
$ git config --global http.proxy [IP Address]:[Port Nr]
$ git config --global core.excludesfile ~/.gitignore_global
$ cat ~/.gitignore_global 
.buildpath
.project
.settings
```

### Configure shell proxy

```sh
$ export http_proxy=[IP Address]:[Port Nr]
$ export https_proxy=[IP Address]:[Port Nr]
```
### Configure Eclipse for PHP Developers

Validate `phpunit.xml` from local schema

1. Download PHPUnit XSD file
2. Window -> Preferences -> XML -> XML Catalog -> Add...
  * Location: [Path].xsd
  * Key type: Schema location
  * Key: https://schema.phpunit.de/7.1/phpunit.xsd
3. Apply and Close

phpunit.xml

```xml
<phpunit xsi:noNamespaceSchemaLocation="https://schema.phpunit.de/7.1/phpunit.xsd">

</phpunit>
```