<?php

include 'domtree.php';

echo dom::html([
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