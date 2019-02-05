<?php
class Mesa extends AppModel
{
public $belongsTo =array(
    'Mesero'=>array(
      'className' =>'Mesero',
      'foreignKey'=>'mesero_id'
    )
);
public $validate =array(
  'serie'=>array(
      'notBlank'=>array(
        'rule'=>'notBlank'
      ),
      'numeric'=>array(
        'rule'=>'numeric',
        'message'=>'Solo números'
      ),
      'isUnique'=>array(
        'rule'=>'isUnique',
        'message'=>'La serie de la mesa debe ser unica'
    )
  ),
  'puestos'=>array(
      'numeric'=>array(
        'rule'=>'numeric',
        'message'=>'Solo números'
      ),
      'isUnique'=>array(
        'rule'=>'isUnique',
        'message'=>'La serie de la mesa debe ser unica'
      )
  ),
  'posicion'=>array(
    'notBlank'=>array(
      'rule'=>'notBlank'
    )
  )
);

}
 ?>
