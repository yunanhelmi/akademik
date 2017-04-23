<?php

namespace app\models;

use \app\models\base\Login as BaseLogin;

/**
 * This is the model class for table "login".
 */
class Login extends BaseLogin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['username', 'password'], 'required'],
            [['username', 'password', 'authKey', 'accessToken', 'role', 'client_id', 'created_at', 'updated_at'], 'string', 'max' => 50],
            //[['lock'], 'default', 'value' => '0'],
            //[['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
