<?php

use Kirby\CLI\CLI;

return [
    'make:settings' => [
        'description' => 'Create new settings page',
        'args' => [],
        'command' => function (CLI $cli): void {
            $kirby = kirby();
            $slug = option('jan-herman.shared-blueprints.settings.slug');
            $uuid = option('jan-herman.shared-blueprints.settings.uuid');

            if ($kirby->page('page://' . $uuid)?->exists()) {
                $cli->error('Page with UUID "' . $uuid . '" already exists.');
                return;
            }

            $kirby->impersonate(
                'kirby',
                fn () => $kirby->site()->createChild([
                    'slug' => $slug,
                    'template' => 'settings',
                    'content' => [
                        'uuid' => $uuid,
                    ]
                ])->changeStatus('unlisted')
            );

            $cli->success('Settings page created.');
        }
    ],
    'make:media-library' => [
        'description' => 'Create new media library page',
        'args' => [],
        'command' => function (CLI $cli): void {
            $kirby = kirby();
            $slug = option('jan-herman.shared-blueprints.mediaLibrary.slug');
            $uuid = option('jan-herman.shared-blueprints.mediaLibrary.uuid');

            if ($kirby->page('page://' . $uuid)?->exists()) {
                $cli->error('Page with UUID "' . $uuid . '" already exists.');
                return;
            }

            $kirby->impersonate(
                'kirby',
                fn () => $kirby->site()->createChild([
                    'slug' => $slug,
                    'template' => 'media-library',
                    'content' => [
                        'uuid' => $uuid,
                    ]
                ])->changeStatus('unlisted')
            );

            $cli->success('Media library page created.');
        }
    ],
];
