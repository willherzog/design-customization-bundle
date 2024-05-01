<?php

namespace WHSymfony\DesignCustomizationBundle\Config;

use WHSymfony\WHFormBundle\Config\LabelAwareEnum;

/**
 * @author Will Herzog <willherzog@gmail.com>
 */
enum BackgroundSize: string implements LabelAwareEnum
{
	case Original = 'original';
	case FillWidth = 'fill_w';
	case FillHeight = 'fill_h';

	public function getLabel(): string
	{
		return match($this) {
			self::Original => 'design_customization.background_size.original',
			self::FillWidth => 'design_customization.background_size.fill_width',
			self::FillHeight => 'design_customization.background_size.fill_height'
		};
	}
}
