<?php

use Kirby\Cms\App;

return function (App $kirby): array {
    return [
        'label' => 'field.icon.label',
        'type' => 'icon',
        'max' => 1,
        'folder' => $kirby->root('images'),
        'sprite' => 'icons.svg',
    ];
};
