<?php

class MatchController extends BaseController {

	public function anyIndex()
	{
		return View::make('match',array('a'=>1,'b'=>2));
	}

}
