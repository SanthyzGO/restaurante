<h2>crear mesa</h2>
<?php

  echo $this->Form->create('Mesa');
  echo $this->Form->input('serie');
  echo $this->Form->input('puestos');
  echo $this->Form->input('posicion',array('row'=>'3'));
  echo $this->Form->input('mesero_id');
  echo $this->Form->end('Crear Mesa');


  echo $this->html->link('Volver',array('controller'=>'mesas','action'=>'index'));
  ?>
