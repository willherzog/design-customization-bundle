<?php

namespace WHPHP\Config;

use WHSymfony\WHFormBundle\Config\LabelAwareEnum;

/**
 * @author Will Herzog <willherzog@gmail.com>
 */
enum HorizontalAlignment: string implements LabelAwareEnum
{
	case Left = 'left';
	case Center = 'center';
	case Right = 'right';

	public function getLabel(): string
	{
		return match($this) {
			self::Left => 'design_customization.alignment.left',
			self::Center => 'design_customization.alignment.right',
			self::Right => 'design_customization.alignment.center'
		};
	}
}
