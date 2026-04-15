<?php

return function ($kirby): array {
    $media_library_slug = $kirby->option('jan-herman.shared-blueprints.mediaLibrary.slug');
    $media_library_page = $kirby->site()->find($media_library_slug);

    $query = "page.images.filterBy('template', 'image')";

    if ($media_library_page?->exists()) {
        $query .= ".add(site.find('{$media_library_slug}').images.filterBy('template', 'image'))";
    }

    return [
        'label' => 'field.image.label',
        'info' => '{< file.infoString >}',
        'type' => 'files',
        'query' => $query,
        'multiple' => false,
        'uploads' => [
            'template' => 'image',
        ],
        'image' => [
            'cover' => true,
        ],
    ];
};
