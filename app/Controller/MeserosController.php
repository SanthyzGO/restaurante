<?php
class MeserosController extends AppController
{
    public $helpers = array('Html','Form');
    public $component = array('Session');
    public function index()
    {
         $this->set('meseros',$this->Mesero->find('all'));
    }
    public function ver($id=null)
    {
        if(!$id)
        {
            throw new NotFoundException('Datos invalidos');
        }
        $mesero=$this->Mesero->findById($id);
        if(!$mesero)
        {
            throw new NotFoundException('El mesero no existe');
        }
        $this->set('mesero',$mesero);
    }
    public function nuevo()
    {
        if($this->request->is('post'))
        {
            $this->Mesero->create();
            if($this->Mesero->save($this->request->data))
            {
                $this->Session->setFlash('Los Datos han sido guardados','default',array('class'=>'success'));
                return $this->redirect(array('action'=>'index'));
            }
            $this->Session->setFlash('Los datos no pudieron ser guardados');
        }
    }
    public function editar($id=null)
    {
        if (!$id) {
            throw new NotFoundException('Datos invalidos');
        }
        $mesero=$this->Mesero->findBy($id);
        if (!$mesero) {
            throw new NotFoundException('No existe el mesero');
        }
    }
}
?>