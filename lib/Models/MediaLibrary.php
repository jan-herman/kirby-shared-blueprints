<?php

namespace JanHerman\SharedBlueprints\Models;

use Kirby\Cms\Page;
use Kirby\Content\Field;
use Kirby\Toolkit\I18n;

class MediaLibrary extends Page
{
	/**
	 * Returns the title used for the panel menu from translations if not set in the content
	 */
	public function title(): Field
	{
		$title_from_content = $this->content()->get('title');

        if ($title_from_content->isNotEmpty()) {
            return $title_from_content;
        }

		return new Field($this, 'title', I18n::translate('panel.media-library.title', 'Media Library'));
	}
}
