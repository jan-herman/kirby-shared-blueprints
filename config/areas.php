<?php

use Kirby\Cms\App as Kirby;

return [
    'settings' => function (Kirby $kirby) {
        $slug = option('jan-herman.shared-blueprints.settings.slug');
        $page = $kirby->page($slug);

        if (!$page?->exists()) {
            return [];
        }

        $panel_path = $page->panel()->path();

        return[
            'label'   => t('panel.settings.title'),
            'icon'    => 'cog',
            'menu'    => true,
            'link'    => $panel_path,
            'current' => str_contains($kirby->request()->path()->toString(), $panel_path),
        ];
    },
    'media-library' => function (Kirby $kirby) {
        $slug = option('jan-herman.shared-blueprints.mediaLibrary.slug');
        $page = $kirby->page($slug);

        if (!$page?->exists()) {
            return [];
        }

        $panel_path = $page->panel()->path();

        return[
            'label'   => t('panel.media-library.title'),
            'icon'    => 'images',
            'menu'    => true,
            'link'    => $panel_path,
            'current' => str_contains($kirby->request()->path()->toString(), $panel_path),
        ];
    },
];
