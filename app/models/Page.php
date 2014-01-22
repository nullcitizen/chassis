<?php

class Page extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'title' => 'required',
		'description' => 'required',
		'content' => 'required'
	);
}
