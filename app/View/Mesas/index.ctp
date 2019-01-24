<h2>Lista de Mesas</h2>
<table>
  <?php echo $this->html->link('Agregar',array('controller'=>'mesas','action'=>'nuevo')); ?>
  <tr>
    <td>Serie</td>
    <td>Puestos</td>
    <td>Posicion</td>
    <td>Creado</td>
    <td>modificado</td>
    <td>resposable</td>
    <td>Editar</td>
    <td>Eliminar</td>
  </tr>
  <?php foreach($mesas as $mesa): ?>
    <tr>
      <td><?php echo $mesa['Mesa']['serie']; ?></td>
      <td><?php echo $mesa['Mesa']['puestos']; ?></td>
      <td><?php echo $mesa['Mesa']['posicion']; ?></td>
      <td><?php echo $this->Time->format('d-m-Y ; h:i A',$mesa['Mesa']['created']);?></td>
      <td><?php echo $this->Time->format('d-m-Y ; h:i A',$mesa['Mesa']['modified']);?></td>
      <td><?php echo $this->Html->link($mesa['Mesero']['nombre'].' '.$mesa['Mesero']['apellido'],array('controller'=>'meseros', 'action'=>'ver',$mesa['Mesero']['id'])); ?></td>
      <td><?php echo $this->Html->link('Editar',array('controller'=>'mesas','action'=>'editar',$mesa['Mesa']['id']));?></td>
      <td><?php echo $this->Form->postlink('Eliminar',array('action'=>'eliminar',$mesa['Mesa']['id']),array('confirm'=>'eliminar mesa'.$mesa['Mesa']['serie'].'?')); ?></td>
      </tr>
    <?php endforeach; ?>
</table>
