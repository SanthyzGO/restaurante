<?php
class Mesa extends AppModel
{
public $belongsTo =array(
    'Mesero'=>array(
      'className' =>'Mesero',
      'ForeignKey'=>'mesero_id'
    )
);
}
 ?>
