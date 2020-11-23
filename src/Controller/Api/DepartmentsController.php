<?php

namespace App\Controller\Api;

use App\Controller\Api\AppController;

/**
 * Departments Controller
 *
 * @property \App\Model\Table\DepartmentsTable $Departments
 *
 * @method \App\Model\Entity\Department[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DepartmentsController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function initialize() {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function index() {
        $departments = $this->Departments->find('all');
        $this->set([
            'departments' => $departments,
            '_serialize' => ['departments']
        ]);
    }

    public function view($id) {
        $department = $this->Departments->get($id);
        $this->set([
            'department' => $department,
            '_serialize' => ['department']
        ]);
    }

    public function add() {
        $this->request->allowMethod(['post', 'put']);
        $department = $this->Departments->newEntity($this->request->getData());
        if ($this->Departments->save($department)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            'department' => $department,
            '_serialize' => ['message', 'department']
        ]);
    }

    public function edit($id) {
        $this->request->allowMethod(['patch', 'post', 'put']);
        $department = $this->Departments->get($id);
        $department = $this->Departments->patchEntity($department, $this->request->getData());
        if ($this->Departments->save($department)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }

    public function delete($id) {
         $this->request->allowMethod(['delete']);
        $department = $this->Departments->get($id);
        $message = 'Deleted';
        if (!$this->Departments->delete($department)) {
            $message = 'Error';
        }
        $this->set([
            'message' => $message,
            '_serialize' => ['message']
        ]);
    }

}
