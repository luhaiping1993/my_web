<?php

class SiteController extends Controller
{
	public $layout = false;
	public function actionIndex()
	{
		$end_time = strtotime('2015-10-30');
		$this->render('index',array('end_time' => $end_time));
	}

	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	
}