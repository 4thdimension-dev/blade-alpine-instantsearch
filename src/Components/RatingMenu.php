<?php

namespace InterNACHI\BladeInstantSearch\Components;

class RatingMenu extends Widget
{
	public function __construct(
		?string $attribute = null,
		?int $max = null,
		?string $id = null
	) {
		$this->setId($id);
		$this->setWidgetData(array_filter(compact(
			'attribute',
			'max'
		)));
	}
	
	public function render()
	{
		return view('instantsearch::rating-menu');
	}
	
	protected function widgetDefaults(): string
	{
		return '{ items: [], hasNoResults: true, canRefine: false, refine: null, sendEvent: null, createURL: null, widgetParams: {} }';
	}
}
