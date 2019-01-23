<h2>Lista de meseros</h2>
<?php
echo $this->Html->link('Crear Mesero',array('controller'=>'meseros','action'=>'nuevo'));?>
<table>
 <tr>
  <td>Id</td>
  <td>Nombre</td>
  <td>Apellido</td>
  <td>Detalle</td>
  <td>Editar</td>
 </tr>
 <?php foreach($meseros as $mesero):?>
 <tr>
  <td><?php echo $mesero['Mesero']['id'];?></td>
  <td><?php echo $mesero['Mesero']['nombre'];?></td>
  <td><?php echo $mesero['Mesero']['apellido'];?></td>
  <td> <?php echo $this->Html->link('Detalle',array('controller' => 'meseros','action'=>'ver',$mesero['Mesero']['id'])); ?></td>
  <td><?php echo $this->Html->link('Editar',array('controller'=>'meseros','action'=>'editar',$mesero['Mesero']['id']));?></td>
  <td><?php echo $this->Form->postlink('Eliminar',array('action'=>'eliminar',$mesero['Mesero']['id']),array('confirm'=>'Seguro que desea eliminar a '.$mesero['Mesero']['nombre'].'?'));?></td>
 </tr>
 <?php endforeach;?>
</table>
