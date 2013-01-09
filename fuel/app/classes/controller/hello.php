<?php

class Controller_Hello extends Controller_Template
{

	public function action_index()
	{
		$this->template->title = 'Hello &raquo; Index';
		$this->template->content = View::forge('hello/index');
	}

}
