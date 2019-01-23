<h2>Detalles de Mesero</h2>

 <p><strong>Id:</strong><?php echo $mesero['Mesero']['id'];?></p>
 <p><strong>Nombre:</strong><?php echo $mesero['Mesero']['nombre'];?></p>
 <p><strong>Apellido:</strong> <?php echo $mesero['Mesero']['apellido'];?></p>
 <p><strong>Doc Id:</strong><?php echo $mesero['Mesero']['doc'];?></p>
 <p><strong>Fecha Creacion:</strong><?php echo$mesero['Mesero']['created'];?></p>
<!-- <pre>
<?php
echo var_dump($mesero);
 ?></pre> -->
<h2>Mesas de el mesero</h2>
<?php if (empty($mesero['Mesas'])) :?>
<p>no tiene mesas asociadas</p>
<?php endif; ?>
<?php
foreach ($mesero['Mesa']   as $n) :?>
  <p>
  Serie: <?php  echo $n['serie'] ?>
 <br/>
  Puestos: <?php  echo $n['puestos'] ?>
  <br>
  Pocision: <?php  echo $n['posicion'] ?>
  <br>
  Creado: <?php  echo $n['created'] ?>
  </p>
<?php endforeach;?>
<?php
echo $this->Html->link('volver a la lista de meseros',array('controller'=>'meseros','action'=>'index'));
 ?>
