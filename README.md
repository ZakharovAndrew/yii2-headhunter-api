# Yii2 HeadHunter API Client

[![Latest Stable Version](https://poser.pugx.org/zakharov-andrew/yii2-hh-api/v/stable)](https://packagist.org/packages/zakharov-andrew/yii2-hh-api)
[![License](https://poser.pugx.org/zakharov-andrew/yii2-hh-api/license)](https://packagist.org/packages/zakharov-andrew/yii2-hh-api)
[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)

Yii2 REST API Client for Headhunter (HH.ru)

Official API docs available [here](https://github.com/hhru/api).

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ composer require zakharov-andrew/yii2-settings
```
or add

```
"zakharov-andrew/yii2-settings": "*"
```

to the ```require``` section of your ```composer.json``` file.

Subsequently, run

```
./yii migrate/up --migrationPath=@vendor/zakharov-andrew/yii2-hh-api/migrations
```

in order to create the settings table in your database.
