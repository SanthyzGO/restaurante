<?php
class Mesero extends AppModel
{
    public $validate = array(
        'doc'=>array(
            'notBlank'=>array('rule'=>'notBlank'),
            'numeric'=>array('rule'=>'numeric','message'=>'Solo Números'),
            'unique'=>array(
                'rule'=>'isUnique',
                'message' => 'El documento ya existe'
            )
        ),
        'nombre'=>array(
            'rule'=>'notBlank'
        ),
        'apellido'=>array(
            'rule'=>'notBlank'
        ),
        'telefono'=>array(
            'notBlank'=>array('rule'=>'notBlank'),
            'numeric'=>array('rule'=>'numeric','message'=>'Solo Números')
        )
    );
    public $hasMany=array(
        'Mesa'=>array(
            'className'=>'Mesa',
            'foreignKey'=>'mesero_id'
            'conditions'=>'',
            'order'=>'Mesa.serie DESC',
            'depend'=> false
        )
    );

}
?>