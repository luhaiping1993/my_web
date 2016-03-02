<?php

class DefaultController extends Controller
{
/**
 * 后台登录
 * @return [type] [description]
 */
    public function actionLogin()
    {
        if(Yii::app()->request->isPostRequest){
            //登录信息
            $login = Yii::app()->request->getPost("login",null);
            if(empty($login) || empty($login['username']) || empty($login['password'])){
                $this->redirect($this->createUrl('/admin/default/login'));
            }
            $validate = Admin::model()->ValidateAdmin($login);
            //登录失败；
            if(!$validate){
                $this->redirect($this->createUrl('/admin/default/login',array("message"=>"账户或密码错误")));
            }else{
            //登录成功；
                $this->redirect($this->createUrl('/admin/site/index'),$admin=$validate);
            }
        }
        $message=Yii::app()->request->getQuery('message',null);
        $this->renderPartial('login',array("message"=>$message));
    }

    public function actionIndex()
    {
        $this->render('index');
    }
}