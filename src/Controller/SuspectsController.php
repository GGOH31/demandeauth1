<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Suspects Controller
 *
 * @property \App\Model\Table\SuspectsTable $Suspects
 *
 * @method \App\Model\Entity\Suspect[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SuspectsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['TrancheAges'],
        ];
        $suspects = $this->paginate($this->Suspects);

        $this->set(compact('suspects'));
    }

    /**
     * View method
     *
     * @param string|null $id Suspect id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $suspect = $this->Suspects->get($id, [
            'contain' => ['TrancheAges', 'LigneSuspectsAntecedents', 'LigneSuspectsSymptomes'],
        ]);

        $this->set('suspect', $suspect);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $suspect = $this->Suspects->newEntity();
        if ($this->request->is('post')) {
            $suspect = $this->Suspects->patchEntity($suspect, $this->request->getData());
            if ($this->Suspects->save($suspect)) {
                $this->Flash->success(__('The suspect has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The suspect could not be saved. Please, try again.'));
        }
        $trancheAges = $this->Suspects->TrancheAges->find('list', ['limit' => 200]);
        $this->set(compact('suspect', 'trancheAges'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Suspect id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $suspect = $this->Suspects->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $suspect = $this->Suspects->patchEntity($suspect, $this->request->getData());
            if ($this->Suspects->save($suspect)) {
                $this->Flash->success(__('The suspect has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The suspect could not be saved. Please, try again.'));
        }
        $trancheAges = $this->Suspects->TrancheAges->find('list', ['limit' => 200]);
        $this->set(compact('suspect', 'trancheAges'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Suspect id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $suspect = $this->Suspects->get($id);
        if ($this->Suspects->delete($suspect)) {
            $this->Flash->success(__('The suspect has been deleted.'));
        } else {
            $this->Flash->error(__('The suspect could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
