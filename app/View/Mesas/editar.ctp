<h2>editar mesa</h2>
<?php

  echo $this->Form->create('Mesa');
  echo $this->Form->input('serie');
  echo $this->Form->input('puestos');
  echo $this->Form->input('posicion',array('row'=>'3'));
  echo $this->Form->input('mesero_id');
  echo $this->Form->end('Editar Mesa');
