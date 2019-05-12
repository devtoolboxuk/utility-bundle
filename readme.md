# PHP Utility Bundle

Version: 1.0.0

## Table of Contents

- [Summary](#summary)
- [Install](#install)
  - [Compile](#Compile) 
- [Usage](#usage)
  - [Call Utility Bundle](#Call Utility Bundle)
  - _Memory_
  - [Memory Usage](#Memory Usage)
  - [Peak Memory Usage](#Peak Memory Usage)
  - _Debug_
  - [Get execution time](#Get execution time)
- [Maintainers](#maintainers)

## Summary
PHP Library to perform some basic utility tasks (I got fed up of writing them for multiple projects)

## Install
Install Composer:
```sh
$ php -r "readfile('https://getcomposer.org/installer');" | php
```

Install dependencies:
```sh
$ php composer.phar install
```

```php
use devtoolboxuk\utilitybundle;

$this->utility = new UtilityService();
```

## Memory
```php
$memory = $this->utility->memory();
```

#### Memory usage
 ```php
$memory->getMemUsage(); //Outputs the memory usage
```

#### Peak Memory usage
 ```php
$memory->getPeakMemUsage(); //Outputs the peak memory usage
```


## Debug
```php
$debug = $this->utility->time();
```

#### Get execution time 
 ```php
$debug->initialise(); 
$debug->executionTime();
```

## Maintainers
[@devtoolboxuk](https://github.com/devtoolboxuk/).
