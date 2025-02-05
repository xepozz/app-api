<?php

declare(strict_types=1);

use Yiisoft\Assets\AssetManager;
use Yiisoft\Definitions\Reference;

return [
    'yiisoft/view' => [
        'basePath' => '@views',
        'parameters' => [
            'assetManager' => Reference::to(AssetManager::class),
        ],
        'theme' => [
            'pathMap' => [],
            'basePath' => '',
            'baseUrl' => '',
        ],
    ],
];
