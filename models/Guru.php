<?php

namespace app\models;

use \app\models\base\Guru as BaseGuru;

/**
 * This is the model class for table "guru".
 */
class Guru extends BaseGuru
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['nama', 'email'], 'required'],
            [['nama', 'email', 'nip'], 'string', 'max' => 50],
            [['alamat'], 'string', 'max' => 100],
            [['no_telp'], 'string', 'max' => 12],
            [['lock'], 'default', 'value' => '0'],
            [['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
