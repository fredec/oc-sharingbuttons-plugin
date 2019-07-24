<?php namespace Diveramkt\SharingButtons\Components;

use Cms\Classes\ComponentBase;

use Diveramkt\SharingButtons\Models\Company;

class SharingButtons extends ComponentBase
{

	public function componentDetails(){
		return [
			'name' => 'SharingButtons',
			'description' => 'Put buttons to share your content'
		];
	}

	public function defineProperties(){
		return [
			'facebook' => [
				'title' => 'Facebook',
				'description' => 'Enable Facebook share button',
				'default' => 'true',
				'type' => 'dropdown',
				'options' => ['true' => 'True', 'false' => 'False'],
			],
			'twitter' => [
				'title' => 'Twitter',
				'description' => 'Enable Twitte share button',
				'default' => 'true',
				'type' => 'dropdown',
				'options' => ['true' => 'True', 'false' => 'False'],
			],
			'pinterest' => [
				'title' => 'Pinterest',
				'description' => 'Enable Pinterest share button',
				'default' => 'true',
				'type' => 'dropdown',
				'options' => ['true' => 'True', 'false' => 'False'],
			],
			'linkedin' => [
				'title' => 'Linkedin',
				'description' => 'Enable Linkedin share button',
				'default' => 'true',
				'type' => 'dropdown',
				'options' => ['true' => 'True', 'false' => 'False'],
			],
		];
	}

	public function onRun(){
		$this->facebook = $this->property('facebook');
		$this->twitter = $this->property('twitter');
		$this->pinterest = $this->property('pinterest');
		$this->linkedin = $this->property('linkedin');
	}

	public $facebook;
	public $twitter;
	public $pinterest;
	public $linkedin;
}