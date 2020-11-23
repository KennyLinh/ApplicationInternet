<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Apropos Controller
 *
 * @property \App\Model\Table\AproposTable $Apropos
 *
 * @method \App\Model\Entity\Apropo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AproposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $apropos = $this->paginate($this->Apropos);

        $this->set(compact('apropos'));
    }



    
}
