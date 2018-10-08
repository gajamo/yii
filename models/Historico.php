<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "historico".
 *
 * @property int $idhistorico
 * @property string $radicado
 * @property string $fecha
 * @property string $estado
 * @property string $responsable
 */
class Historico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'historico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['radicado', 'fecha', 'estado', 'responsable'], 'required'],
            [['radicado', 'fecha', 'estado', 'responsable'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idhistorico' => 'Idhistorico',
            'radicado' => 'Radicado',
            'fecha' => 'Fecha',
            'estado' => 'Estado',
            'responsable' => 'Responsable',
        ];
    }
}
