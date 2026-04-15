<?php

namespace JanHerman\SharedBlueprints\Models;

use Kirby\Cms\Page;
use Kirby\Content\Field;
use Kirby\Toolkit\I18n;

class ErrorPage extends Page
{
	/**
	 * Returns the title from translations if not set in the content
	 */
	public function title(): Field
	{
        $title_from_content = $this->content()->get('title');

        if ($title_from_content->isNotEmpty()) {
            return $title_from_content;
        }

        $default_title = 'Error ' . $this->errorCode();
		return new Field($this, 'title', I18n::translate('error.' . $this->errorCode() . '.title', $default_title));
	}

    /**
     * Returns the error code from the response
     */
    public function errorCode(): int
    {
        return $this->kirby()->response()->code();
    }
}
