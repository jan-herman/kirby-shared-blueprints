<?php

return [
    'authorFallback' => function (): string {
        if ($this->type() !== 'image') {
            return '';
        }

        return $this->exif()->data()['Artist'] ?? '';
    },
    'infoString' => function (): string {
        $meta = [];

        $meta[] = $this->niceSize();

        if ($this->dimensions()) {
            $meta[] = $this->dimensions();
        }

        return '<small class="k-file-info-string">' . implode('&nbsp;&nbsp;&nbsp;&nbsp;', $meta) . '</small>';
    }
];
