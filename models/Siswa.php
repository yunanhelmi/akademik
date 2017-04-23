<?php

namespace app\models;

use \app\models\base\Siswa as BaseSiswa;

/**
 * This is the model class for table "siswa".
 */
class Siswa extends BaseSiswa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return array_replace_recursive(parent::rules(),
	    [
            [['no_induk', 'nama', 'alamat', 'kelas'], 'required'],
            [['kelas'], 'integer'],
            [['no_induk', 'nama', 'alamat'], 'string', 'max' => 50],
            //[['lock'], 'default', 'value' => '0'],
            //[['lock'], 'mootensai\components\OptimisticLockValidator']
        ]);
    }
	
}
