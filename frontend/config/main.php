<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'language' => 'uz', // 'uz', 'en', 'ru'
    'defaultRoute' => 'site/index',
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],

        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@frontend/messages',
                    //'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ],
                ],
            ],
        ],

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                "login" => "site/login",
                "register" => "site/signup",
                "year/<id:\d+>" => "site/index",
                "posts/update/<id:\d+>" => "post/update",
                "catalog/<name:\w+>" => "catalog/index",
                "country/<name:\w+>" => "country/index",
                "janr/<name:\w+>" => "janr/index",
                "play/<slag:\w+>" => "play/index",
                // [
                //     'pattern' => "play/<path:\w+>",
                //     "route" => "play/index",
                //     "suffix" => ".mp3"
                // ]
            ],
        ],
        'assetManager' => [
            'bundles' => [
                // 'yii\web\JqueryAsset' => [
                //     'js' =>[]
                // ],
                'yii\bootstrap5\BootstrapPluginAsset' => [
                    'js' => []
                ],
                'yii\bootstrap5\BootstrapAsset' => [
                    'css' => [],
                ],
            ],
        ]
    ],

    'on beforeRequest' => function($event){
        $session = Yii::$app->session;

        if ($session->has('lang')) {
            Yii::$app->language = $session['lang'];
        }
    },

// Shaxsiy blog web sayt.

// Ushbu site yakka tartibdagi dasturchiga mos bo'lib uning barcha imkoniyatlarini ochib bera oladi. Bunda portfolio, shaxsiy tajribalar, testemonial, bog'lanish va boshqa qismlari mavjud.













    'modules' => [
        'billing' => [
            'class' => 'frontend\modules\billing\Billing'
        ]
    ],

    'params' => $params,
];
