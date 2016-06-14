<?php

namespace d3yii2\d3files\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "d3files".
 *
 * @property string $id
 * @property integer $type_id
 * @property string $file_name
 * @property string $add_datetime
 * @property integer $user_id
 * @property integer $deleted
 * @property string $notes
 * @property string $model_name
 * @property string $model_id
 */
class D3files extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'd3files';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_id', 'user_id', 'deleted', 'model_id'], 'integer'],
            [['file_name', 'add_datetime', 'user_id', 'model_name', 'model_id'], 'required'],
            [['notes'], 'string'],
            [['add_datetime'], 'safe'],
            [['file_name'], 'string', 'max' => 255],
            [['model_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'           => Yii::t('d3files', 'ID'),
            'type_id'      => Yii::t('d3files', 'Type ID'),
            'file_name'    => Yii::t('d3files', 'File Name'),
            'add_datetime' => Yii::t('d3files', 'Add Datetime'),
            'user_id'      => Yii::t('d3files', 'User ID'),
            'deleted'      => Yii::t('d3files', 'Deleted'),
            'notes'        => Yii::t('d3files', 'Notes'),
            'model_name'   => Yii::t('d3files', 'Model Name'),
            'model_id'     => Yii::t('d3files', 'Model ID'),
        ];
    }
}
