<?php defined('SYSPATH') or die('No direct script access.');

class Formo_Driver_Hidden_Core extends Formo_Driver {

	protected $view = 'hidden';

	public function html()
	{
		$this->render_field
			->set('tag', 'input')
			->attr('type', 'hidden')
			->attr('name', $this->render_field->alias())
			->attr('value', HTML::entities($this->render_field->value));
	}

}