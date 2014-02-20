<?php

class dom
{
	public static function makeAttributes($attributes)
	{
		if (!$attributes) return '';

		$pairs = [];

		foreach ($attributes as $name => $value)
		{
			$pairs[] = $name.'="'.$value.'"';
		}

		return ' '.implode(' ', $pairs);
	}

	public static function make($element, $attributes = [], $content = '')
	{
		$attributes = dom::makeAttributes($attributes);

		if ($content == '')
		{
			return '<'.$element.$attributes.' />';
		}
		else
		{
			if (is_array($content)) $content = implode("\n", $content);

			return '<'.$element.$attributes.">\n".$content."\n</".$element.'>';
		}
	}

	public static function __callStatic($name, $arguments)
	{
		$content = array_pop($arguments);
		$attributes = array_pop($arguments);

		return dom::make($name, $attributes, $content);
	}
}