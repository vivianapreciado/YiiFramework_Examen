<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actor_has_pelicula".
 *
 * @property int $fk_idactor
 * @property int $fk_idpelicula
 *
 * @property Actor $fkIdactor
 * @property Pelicula $fkIdpelicula
 */
class ActorHasPelicula extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'actor_has_pelicula';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_idactor', 'fk_idpelicula'], 'required'],
            [['fk_idactor', 'fk_idpelicula'], 'integer'],
            [['fk_idactor', 'fk_idpelicula'], 'unique', 'targetAttribute' => ['fk_idactor', 'fk_idpelicula']],
            [['fk_idactor'], 'exist', 'skipOnError' => true, 'targetClass' => Actor::class, 'targetAttribute' => ['fk_idactor' => 'idactor']],
            [['fk_idpelicula'], 'exist', 'skipOnError' => true, 'targetClass' => Pelicula::class, 'targetAttribute' => ['fk_idpelicula' => 'idpelicula']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fk_idactor' => Yii::t('app', 'Fk Idactor'),
            'fk_idpelicula' => Yii::t('app', 'Fk Idpelicula'),
        ];
    }

    /**
     * Gets query for [[FkIdactor]].
     *
     * @return \yii\db\ActiveQuery|ActorQuery
     */
    public function getFkIdactor()
    {
        return $this->hasOne(Actor::class, ['idactor' => 'fk_idactor']);
    }

    /**
     * Gets query for [[FkIdpelicula]].
     *
     * @return \yii\db\ActiveQuery|PeliculaQuery
     */
    public function getFkIdpelicula()
    {
        return $this->hasOne(Pelicula::class, ['idpelicula' => 'fk_idpelicula']);
    }

    /**
     * {@inheritdoc}
     * @return ActorHasPeliculaQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ActorHasPeliculaQuery(get_called_class());
    }
}
