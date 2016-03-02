<?php
/**
 * 个人博客
 * @author luhp luhaiping@wanthings.com
 * @copyright 成都网信天成科技有限公司, 2015 ,http://www.wanthings.com
 */
class SiteController extends Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }

    /**
     * 关于我
     */
    public function actionAboutMe()
    {
        
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

    public function actionLogin()
    {
        $this->render("login");
    }
}
