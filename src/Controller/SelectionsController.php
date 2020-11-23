<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Selections Controller
 *
 * @property \App\Model\Table\SelectionsTable $Selections
 *
 * @method \App\Model\Entity\Selection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SelectionsController extends AppController {

    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['getByDepartment', 'add', 'edit', 'delete']);
        $this->viewBuilder()->setLayout('cakephp_default');
    }

    public function getByDepartment() {
        $department_id = $this->request->query('department_id');

        $selections = $this->Selections->find('all', [
            'conditions' => ['Selections.department_id' => $department_id],
        ]);
        $this->set('selections', $selections);
        $this->set('_serialize', ['selections']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Departments'],
        ];
        $selections = $this->paginate($this->Selections);

        $this->set(compact('selections'));
    }

    /**
     * View method
     *
     * @param string|null $id Selection id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $selection = $this->Selections->get($id, [
            'contain' => ['Departments', 'Subsubjects'],
        ]);

        $this->set('selection', $selection);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $selection = $this->Selections->newEntity();
        if ($this->request->is('post')) {
            $selection = $this->Selections->patchEntity($selection, $this->request->getData());
            if ($this->Selections->save($selection)) {
                $this->Flash->success(__('The selection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The selection could not be saved. Please, try again.'));
        }
        $departments = $this->Selections->Departments->find('list', ['limit' => 200]);
        $this->set(compact('selection', 'departments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Selection id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $selection = $this->Selections->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $selection = $this->Selections->patchEntity($selection, $this->request->getData());
            if ($this->Selections->save($selection)) {
                $this->Flash->success(__('The selection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The selection could not be saved. Please, try again.'));
        }
        $this->set(compact('selection'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Selection id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $selection = $this->Selections->get($id);
        if ($this->Selections->delete($selection)) {
            $this->Flash->success(__('The selection has been deleted.'));
        } else {
            $this->Flash->error(__('The selection could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
