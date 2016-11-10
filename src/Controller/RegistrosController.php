<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Registros Controller
 *
 * @property \App\Model\Table\RegistrosTable $Registros
 */
class RegistrosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    
       
    public function index()
    {
        $registros = $this->paginate($this->Registros);
        $this->set('registros', $registros);
    }

     public function add()
    {
        $registro = $this->Registros->newEntity();

        if ($this->request->is('post')) 
        {
            $registro = $this->Registros->patchEntity($registro, $this->request->data);

            if ($this->Registros->save($registro)) 
            {
                $this->Flash->success('El registro se realizo correctamente');
                return $this->redirect(['controller' => 'Registros', 'action' => 'index']);
            }else{
                $this->Flash->error('El registro no se llebo acabo intetelo neuvamente');
            }
        }
        $this->set(compact('registro'));
    }

     public function delte()
    {
        
    }

     public function view()
    {
      
    }

}
