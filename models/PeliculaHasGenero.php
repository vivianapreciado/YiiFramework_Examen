<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pelicula_has_genero".
 *
 * @property int $fk_idpelicula
 * @property int $fk_idcategoria
 *
 * @property Genero $fkIdcategoria
 * @property Pelicula $fkIdpelicula
 */
class PeliculaHasGenero extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelicula_has_genero';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fk_idpelicula', 'fk_idcategoria'], 'required'],
            [['fk_idpelicula', 'fk_idcategoria'], 'integer'],
            [['fk_idpelicula', 'fk_idcategoria'], 'unique', 'targetAttribute' => ['fk_idpelicula', 'fk_idcategoria']],
            [['fk_idpelicula'], 'exist', 'skipOnError' => true, 'targetClass' => Pelicula::class, 'targetAttribute' => ['fk_idpelicula' => 'idpelicula']],
            [['fk_idcategoria'], 'exist', 'skipOnError' => true, 'targetClass' => Genero::class, 'targetAttribute' => ['fk_idcategoria' => 'idcategoria']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'fk_idpelicula' => Yii::t('app', 'Fk Idpelicula'),
            'fk_idcategoria' => Yii::t('app', 'Fk Idcategoria'),
        ];
    }

    /**
     * Gets query for [[FkIdcategoria]].
     *
     * @return \yii\db\ActiveQuery|GeneroQuery
     */
    public function getFkIdcategoria()
    {
        return $this->hasOne(Genero::class, ['idcategoria' => 'fk_idcategoria']);
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
     * @return PeliculaHasGeneroQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PeliculaHasGeneroQuery(get_called_class());
    }
}
