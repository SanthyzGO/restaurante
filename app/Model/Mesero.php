<?php
class Mesero extends AppModel
{
    public $validate = array(
        'doc'=>array(
            'notBlank'=>array('rule'=>'notBlank'),
            'numeric'=>array('rule'=>'numeric','message'=>'Solo Números')
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

}
?>