<?php

use Kirby\Cms\App;

return function (App $kirby) {
    return [
        [
            'pattern' => $kirby->option('jan-herman.shared-blueprints.settings.slug') . '(:all)',
            'language' => '*',
            'action' => function () {
                return false;
            }
        ],
        [
            'pattern' => $kirby->option('jan-herman.shared-blueprints.mediaLibrary.slug') . '(:all)',
            'language' => '*',
            'action' => function () {
                return false;
            }
        ],
    ];
};
