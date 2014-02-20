# Simple dom tree generator

```php
dom::html([
	dom::head([
		dom::title('page title')
	]),
	dom::body([
		dom::div(['class' => 'container'], [
			dom::div(['class' => 'row'], [

			])
		])
	])
]);
```

## Other ideas

1. `dom::loop($items, function($item) { ... });`
2. dom nodes as instances (append, render, etc)
3. predefined node types with macros

## Contributions are welcome!