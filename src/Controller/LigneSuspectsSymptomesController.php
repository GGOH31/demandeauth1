<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LigneSuspectsSymptomes Controller
 *
 * @property \App\Model\Table\LigneSuspectsSymptomesTable $LigneSuspectsSymptomes
 *
 * @method \App\Model\Entity\LigneSuspectsSymptome[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LigneSuspectsSymptomesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Suspects', 'Symptomes'],
        ];
        $ligneSuspectsSymptomes = $this->paginate($this->LigneSuspectsSymptomes);

        $this->set(compact('ligneSuspectsSymptomes'));
    }

    /**
     * View method
     *
     * @param string|null $id Ligne Suspects Symptome id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ligneSuspectsSymptome = $this->LigneSuspectsSymptomes->get($id, [
            'contain' => ['Suspects', 'Symptomes'],
        ]);

        $this->set('ligneSuspectsSymptome', $ligneSuspectsSymptome);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ligneSuspectsSymptome = $this->LigneSuspectsSymptomes->newEntity();
        if ($this->request->is('post')) {
            $ligneSuspectsSymptome = $this->LigneSuspectsSymptomes->patchEntity($ligneSuspectsSymptome, $this->request->getData());
            if ($this->LigneSuspectsSymptomes->save($ligneSuspectsSymptome)) {
                $this->Flash->success(__('The ligne suspects symptome has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ligne suspects symptome could not be saved. Please, try again.'));
        }
        $suspects = $this->LigneSuspectsSymptomes->Suspects->find('list', ['limit' => 200]);
        $symptomes = $this->LigneSuspectsSymptomes->Symptomes->find('list', ['limit' => 200]);
        $this->set(compact('ligneSuspectsSymptome', 'suspects', 'symptomes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ligne Suspects Symptome id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ligneSuspectsSymptome = $this->LigneSuspectsSymptomes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ligneSuspectsSymptome = $this->LigneSuspectsSymptomes->patchEntity($ligneSuspectsSymptome, $this->request->getData());
            if ($this->LigneSuspectsSymptomes->save($ligneSuspectsSymptome)) {
                $this->Flash->success(__('The ligne suspects symptome has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ligne suspects symptome could not be saved. Please, try again.'));
        }
        $suspects = $this->LigneSuspectsSymptomes->Suspects->find('list', ['limit' => 200]);
        $symptomes = $this->LigneSuspectsSymptomes->Symptomes->find('list', ['limit' => 200]);
        $this->set(compact('ligneSuspectsSymptome', 'suspects', 'symptomes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ligne Suspects Symptome id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ligneSuspectsSymptome = $this->LigneSuspectsSymptomes->get($id);
        if ($this->LigneSuspectsSymptomes->delete($ligneSuspectsSymptome)) {
            $this->Flash->success(__('The ligne suspects symptome has been deleted.'));
        } else {
            $this->Flash->error(__('The ligne suspects symptome could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
