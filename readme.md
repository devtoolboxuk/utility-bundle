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
  - _Date_
  - [Get date](#Get date)
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
$debug = $this->utility->debug();
```

#### Get execution time 
 ```php
$debug->initialise(); 
$debug->executionTime();
```

## Date
```php
$debug = $this->utility->date();
```

#### Get date
 ```php
$debug->convert(); //Returns the date time of now 
$debug->convert('2019-02-07T12:00:00'); //Returns 2019-02-07 12:00:00
```

## Maintainers
[@devtoolboxuk](https://github.com/devtoolboxuk/).
