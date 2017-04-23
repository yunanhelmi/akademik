<?php

namespace app\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use mootensai\behaviors\UUIDBehavior;

/**
 * This is the base model class for table "siswa".
 *
 * @property integer $id
 * @property string $no_induk
 * @property string $nama
 * @property string $alamat
 * @property integer $kelas
 */
class Siswa extends \yii\db\ActiveRecord
{
    use \mootensai\relation\RelationTrait;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['no_induk', 'nama', 'alamat', 'kelas'], 'required'],
            [['kelas'], 'integer'],
            [['no_induk', 'nama', 'alamat'], 'string', 'max' => 50],
            [['created_at', 'updated_at'], 'string', 'max' => 255]
            //[['lock'], 'default', 'value' => '0'],
            //[['lock'], 'mootensai\components\OptimisticLockValidator']
        ];
    }
    
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'siswa';
    }

    /**
     * 
     * @return string
     * overwrite function optimisticLock
     * return string name of field are used to stored optimistic lock 
     * 
     */

    /*
    public function optimisticLock() {
        return 'lock';
    }
    */

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'no_induk' => 'No Induk',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'kelas' => 'Kelas',
        ];
    }

/**
     * @inheritdoc
     * @return array mixed
     */ 
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new \yii\db\Expression('NOW()'),
            ],
            /*
            'blameable' => [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
            */
            'uuid' => [
                'class' => UUIDBehavior::className(),
                'column' => 'id',
            ],
        ];
    }

    /**
     * @inheritdoc
     * @return \app\models\SiswaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\SiswaQuery(get_called_class());
    }
}
