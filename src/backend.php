<?php

namespace pdima88\icms2elasticsearch;

use cmsBackend;

class backend extends cmsBackend {

	public $useDefaultOptionsAction = true;

	public function actionIndex(){
		$this->redirectToAction('options');
	}

}