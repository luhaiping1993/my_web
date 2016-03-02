<?php
class AdminBehavior extends CActiveRecordBehavior
{
    public function ValidateAdmin($admin)
    {
        $return = false;
        if(!empty($admin) && !empty($admin['username']) && !empty($admin['password'])){
            $criteria = new CDbCriteria;
            $criteria->addColumnCondition(array('is_deleted'=>0, 'username'=>$admin['username']));
            $criteria->addColumnCondition(array('password'=>md5($admin['password'])));
            $result = Admin::model()->find($criteria);
            if(!empty($result)){
                $return = $result->attributes;
            }
        }
        return $return;
    }

    /**
     * 管理员的禁用
     */
    public function DisableAdmin()
    {
        
    }
}