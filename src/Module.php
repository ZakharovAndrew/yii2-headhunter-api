<?php

/**
 * Yii2 REST API Client for Headhunter (HH.ru)
 * *************
 *  
 * @link https://github.com/ZakharovAndrew/yii2-headhunter-api/
 * @copyright Copyright (c) 2025 Zakharov Andrew
 */

namespace ZakharovAndrew\headhunter;

use Yii;

class Module extends \yii\base\Module
{
    /**
     * @var string path to the images directory
     */
    public $uploadDir = '';
    
    /**
     *
     * @var string source language for translation 
     */
    public $sourceLanguage = 'en-US';
    
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'ZakharovAndrew\headhunter\controllers';

    /**
     * {@inheritdoc}
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        parent::init();
    }
    
    //imageupload
    
        /**
     * Registers the translation files
     */
    protected function registerTranslations()
    {
        Yii::$app->i18n->translations['extension/yii2-headhunter-api/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => $this->sourceLanguage,
            'basePath' => '@vendor/zakharov-andrew/yii2-headhunter-api/src/messages',
            'on missingTranslation' => ['app\components\TranslationEventHandler', 'handleMissingTranslation'],
            'fileMap' => [
                'extension/yii2-headhunter-api/headhunter' => 'headhunter.php',
            ],
        ];
    }

    /**
     * Translates a message. This is just a wrapper of Yii::t
     *
     * @see Yii::t
     *
     * @param $category
     * @param $message
     * @param array $params
     * @param null $language
     * @return string
     */
    public static function t($message, $params = [], $language = null)
    {
        $category = 'headhunter';
        return Yii::t('extension/yii2-headhunter-api/' . $category, $message, $params, $language);
    }
}
