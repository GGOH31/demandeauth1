<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Symptomes Controller
 *
 * @property \App\Model\Table\SymptomesTable $Symptomes
 *
 * @method \App\Model\Entity\Symptome[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SymptomesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $symptomes = $this->paginate($this->Symptomes);

        $this->set(compact('symptomes'));
    }

    /**
     * View method
     *
     * @param string|null $id Symptome id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $symptome = $this->Symptomes->get($id, [
            'contain' => ['LigneSuspectsSymptomes'],
        ]);

        $this->set('symptome', $symptome);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $symptome = $this->Symptomes->newEntity();
        if ($this->request->is('post')) {
            $symptome = $this->Symptomes->patchEntity($symptome, $this->request->getData());
            if ($this->Symptomes->save($symptome)) {
                $this->Flash->success(__('The symptome has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The symptome could not be saved. Please, try again.'));
        }
        $this->set(compact('symptome'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Symptome id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $symptome = $this->Symptomes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $symptome = $this->Symptomes->patchEntity($symptome, $this->request->getData());
            if ($this->Symptomes->save($symptome)) {
                $this->Flash->success(__('The symptome has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The symptome could not be saved. Please, try again.'));
        }
        $this->set(compact('symptome'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Symptome id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $symptome = $this->Symptomes->get($id);
        if ($this->Symptomes->delete($symptome)) {
            $this->Flash->success(__('The symptome has been deleted.'));
        } else {
            $this->Flash->error(__('The symptome could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
