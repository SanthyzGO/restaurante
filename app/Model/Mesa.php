<?php
class Mesa extends AppModel
{
	public $belognsTo=array(
		'Mesero'=>array(
			'className'=>'Mesero',
			'foreignKey'=> 'mesero_id'
		)
	);
}
 ?>
