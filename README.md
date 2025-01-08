# Yii2 HeadHunter API Client

[![Latest Stable Version](https://poser.pugx.org/zakharov-andrew/yii2-headhunter-api/v/stable)](https://packagist.org/packages/zakharov-andrew/yii2-headhunter-api)
[![License](https://poser.pugx.org/zakharov-andrew/yii2-headhunter-api/license)](https://packagist.org/packages/zakharov-andrew/yii2-headhunter-api)
[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)

Yii2 REST API Client for Headhunter (HH.ru)

Official API docs available [here](https://github.com/hhru/api).

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ composer require zakharov-andrew/yii2-headhunter-api
```
or add

```
"zakharov-andrew/yii2-headhunter-api": "*"
```

to the ```require``` section of your ```composer.json``` file.

Subsequently, run

```
./yii migrate/up --migrationPath=@vendor/zakharov-andrew/yii2-headhunter-api/migrations
```

in order to create the settings table in your database.
