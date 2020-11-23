<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Subsubjects Controller
 *
 * @property \App\Model\Table\SubsubjectsTable $Subsubjects
 *
 * @method \App\Model\Entity\Subsubject[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubsubjectsController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function initialize() {
        parent::initialize();
        $this->Auth->allow(['findSubsubjects', 'add', 'edit', 'delete']);
        $this->viewBuilder()->setLayout('cakephp_default');
    }

    public function findSubsubjects() {

        if ($this->request->is('ajax')) {

            $this->autoRender = false;
            $name = $this->request->query['term'];
            $results = $this->Subsubjects->find('all', array(
                'conditions' => array('Subsubjects.name LIKE ' => '%' . $name . '%')
            ));

            $resultArr = array();
            foreach ($results as $result) {
                $resultArr[] = array('label' => $result['name'], 'value' => $result['id']);
            }
            echo json_encode($resultArr);
        }
    }

    public function index() {
        $this->paginate = [
            'contain' => ['Selections', 'Departments'],
        ];
        $subsubjects = $this->paginate($this->Subsubjects);

        $this->set(compact('subsubjects'));
    }

    /**
     * View method
     *
     * @param string|null $id Subsubject id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null) {
        $subsubject = $this->Subsubjects->get($id, [
            'contain' => ['Selections', 'Departments', 'Orders'],
        ]);

        $this->set('subsubject', $subsubject);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $subsubject = $this->Subsubjects->newEntity();
        if ($this->request->is('post')) {
            $subsubject = $this->Subsubjects->patchEntity($subsubject, $this->request->getData());
            if ($this->Subsubjects->save($subsubject)) {
                $this->Flash->success(__('The subsubject has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subsubject could not be saved. Please, try again.'));
        }
        $departments = $this->Subsubjects->Departments->find('list', ['limit' => 200]);
        $selections = $this->Subsubjects->Selections->find('list', ['limit' => 200]);
        $this->set(compact('subsubject', 'selections', 'departments'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Subsubject id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null) {
        $subsubject = $this->Subsubjects->get($id, [
            'contain' => ['Departments', 'Selections'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subsubject = $this->Subsubjects->patchEntity($subsubject, $this->request->getData());
            if ($this->Subsubjects->save($subsubject)) {
                $this->Flash->success(__('The subsubject has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The subsubject could not be saved. Please, try again.'));
        }
        $departments = $this->Subsubjects->Departments->find('list', ['limit' => 200]);
        $selections = $this->Subsubjects->Selections->find('list', ['limit' => 200]);

        $this->set(compact('subsubject', 'selections'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Subsubject id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $subsubject = $this->Subsubjects->get($id);
        if ($this->Subsubjects->delete($subsubject)) {
            $this->Flash->success(__('The subsubject has been deleted.'));
        } else {
            $this->Flash->error(__('The subsubject could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

}
