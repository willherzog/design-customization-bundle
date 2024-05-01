<?php

namespace WHPHP\Config;

use WHSymfony\WHFormBundle\Config\LabelAwareEnum;

/**
 * @author Will Herzog <willherzog@gmail.com>
 */
enum VerticalAlignment: string implements LabelAwareEnum
{
	case Top = 'top';
	case Middle = 'middle';
	case Bottom = 'bottom';

	public function getLabel(): string
	{
		return match($this) {
			self::Top => 'design_customization.alignment.top',
			self::Middle => 'design_customization.alignment.middle',
			self::Bottom => 'design_customization.alignment.bottom'
		};
	}
}
