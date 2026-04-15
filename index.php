<?php

use Kirby\Cms\App as Kirby;
use Kirby\Content\Field;
use Kirby\Data\Yaml;
use Kirby\Filesystem\F;
use JanHerman\SharedBlueprints\Models\Settings;
use JanHerman\SharedBlueprints\Models\MediaLibrary;
use JanHerman\SharedBlueprints\Models\ErrorPage;

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('jan-herman/shared-blueprints', [
    'options' => [
        'settings' => [
            'slug' => 'settings',
            'uuid' => 'settings',
        ],
        'mediaLibrary' => [
            'slug' => 'media-library',
            'uuid' => 'media-library',
        ],
    ],
    'blueprints' => [
        // Fields
        'fields/alt'                     => __DIR__ . '/blueprints/fields/alt.yml',
        'fields/author'                  => __DIR__ . '/blueprints/fields/author.yml',
        'fields/bg-image'                => __DIR__ . '/blueprints/fields/bg-image.yml',
        'fields/button'                  => __DIR__ . '/blueprints/fields/button.yml',
        'fields/caption'                 => __DIR__ . '/blueprints/fields/caption.yml',
        'fields/code'                    => __DIR__ . '/blueprints/fields/code.yml',
        'fields/cover-image'             => __DIR__ . '/blueprints/fields/cover-image.yml',
        'fields/date'                    => __DIR__ . '/blueprints/fields/date.yml',
        'fields/email'                   => __DIR__ . '/blueprints/fields/email.yml',
        'fields/excerpt'                 => __DIR__ . '/blueprints/fields/excerpt.yml',
        'fields/icon'                    => __DIR__ . '/blueprints/fields/icon.yml',
        'fields/id'                      => __DIR__ . '/blueprints/fields/id.yml',
        'fields/image'                   => require __DIR__ . '/blueprints/fields/image.php',
        'fields/inline-text'             => __DIR__ . '/blueprints/fields/inline-text.yml',
        'fields/link'                    => __DIR__ . '/blueprints/fields/link.yml',
        'fields/menu'                    => __DIR__ . '/blueprints/fields/menu.yml',
        'fields/new-tab'                 => __DIR__ . '/blueprints/fields/new-tab.yml',
        'fields/subtitle'                => __DIR__ . '/blueprints/fields/subtitle.yml',
        'fields/tags'                    => __DIR__ . '/blueprints/fields/tags.yml',
        'fields/tel'                     => __DIR__ . '/blueprints/fields/tel.yml',
        'fields/text'                    => __DIR__ . '/blueprints/fields/text.yml',
        'fields/thumbnail'               => __DIR__ . '/blueprints/fields/thumbnail.yml',
        'fields/title'                   => __DIR__ . '/blueprints/fields/title.yml',
        'fields/video'                   => require __DIR__ . '/blueprints/fields/video.php',

        // Files
        'files/default'                  => __DIR__ . '/blueprints/files/default.yml',
        'files/archive.default'          => __DIR__ . '/blueprints/files/archive.default.yml',
        'files/archive'                  => __DIR__ . '/blueprints/files/archive.default.yml',
        'files/audio.default'            => __DIR__ . '/blueprints/files/audio.default.yml',
        'files/audio'                    => __DIR__ . '/blueprints/files/audio.default.yml',
        'files/document.default'         => __DIR__ . '/blueprints/files/document.default.yml',
        'files/document'                 => __DIR__ . '/blueprints/files/document.default.yml',
        'files/image.default'            => __DIR__ . '/blueprints/files/image.default.yml',
        'files/image'                    => __DIR__ . '/blueprints/files/image.default.yml',
        'files/video.default'            => __DIR__ . '/blueprints/files/video.default.yml',
        'files/video'                    => __DIR__ . '/blueprints/files/video.default.yml',

        // Layouts
        'layouts/file'                   => __DIR__ . '/blueprints/layouts/file.yml',

        // Pages
        'pages/error'                    => __DIR__ . '/blueprints/pages/error.yml',
        'pages/media-library'            => __DIR__ . '/blueprints/pages/media-library.yml',
        'pages/settings.default'         => __DIR__ . '/blueprints/pages/settings.default.yml',
        'pages/settings'                 => __DIR__ . '/blueprints/pages/settings.default.yml',

        // Sections
        'sections/pages'                 => __DIR__ . '/blueprints/sections/pages.yml',
        'sections/pages.drafts'          => __DIR__ . '/blueprints/sections/pages.drafts.yml',
        'sections/posts'                 => __DIR__ . '/blueprints/sections/posts.yml',
        'sections/posts.drafts'          => __DIR__ . '/blueprints/sections/posts.drafts.yml',
        'sections/settings/optimization' => __DIR__ . '/blueprints/sections/settings/optimization.yml',

        // Statuses
        'statuses/default'               => __DIR__ . '/blueprints/statuses/default.yml',

        // Tabs
        'tabs/categories'                => __DIR__ . '/blueprints/tabs/categories.yml',
        'tabs/content'                   => __DIR__ . '/blueprints/tabs/content.yml',
        'tabs/dashboard'                 => __DIR__ . '/blueprints/tabs/dashboard.yml',
        'tabs/media-library'             => __DIR__ . '/blueprints/tabs/media-library.yml',
        'tabs/media'                     => __DIR__ . '/blueprints/tabs/media.yml',
        'tabs/menus'                     => __DIR__ . '/blueprints/tabs/menus.yml',
        'tabs/page-builder'              => __DIR__ . '/blueprints/tabs/page-builder.yml',
        'tabs/posts'                     => __DIR__ . '/blueprints/tabs/posts.yml',
        'tabs/seo-global'                => __DIR__ . '/blueprints/tabs/seo-global.yml',
        'tabs/seo'                       => __DIR__ . '/blueprints/tabs/seo.yml',
        'tabs/settings'                  => __DIR__ . '/blueprints/tabs/settings.yml',

        // Users
        'users/admin'                    => __DIR__ . '/blueprints/users/admin.yml',
        'users/editor'                   => __DIR__ . '/blueprints/users/editor.yml',
        'users/user'                     => __DIR__ . '/blueprints/users/user.yml',
    ],
    'pageModels' => [
        'settings' => Settings::class,
        'media-library' => MediaLibrary::class,
        'error' => ErrorPage::class,
    ],
    'areas' => require __DIR__ . '/config/areas.php',
    'commands' => require __DIR__ . '/config/commands.php',
    'siteMethods' => require __DIR__ . '/config/site-methods.php',
    'fileMethods' => require __DIR__ . '/config/file-methods.php',
    'routes' => require __DIR__ . '/config/routes.php',
    'translations' => [
        'en' => Yaml::decode(F::read(__DIR__ . '/translations/en.yml')),
        'cs' => Yaml::decode(F::read(__DIR__ . '/translations/cs.yml')),
    ],
]);

// Helper functions
if (!function_exists('setting')) {
    function setting(string $key): Field
    {
        return Kirby::instance()->site()->setting($key);
    }
}
