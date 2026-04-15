<?php

use Kirby\Content\Content;
use Kirby\Content\Field;

return [
    'settings' => function (string|null $language_code = null): Content {
        $settings_slug = option('jan-herman.shared-blueprints.settings.slug');
        $settings_page = $this->find($settings_slug);

        if (!$settings_page) {
            return new Content();
        }

        return $settings_page->content($language_code);
    },
    'setting' => function (string $key, string|null $language_code = null): Field {
        return $this->settings($language_code)->{$key}();
    }
];
