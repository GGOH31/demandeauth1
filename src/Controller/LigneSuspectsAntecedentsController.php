<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LigneSuspectsAntecedents Controller
 *
 * @property \App\Model\Table\LigneSuspectsAntecedentsTable $LigneSuspectsAntecedents
 *
 * @method \App\Model\Entity\LigneSuspectsAntecedent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LigneSuspectsAntecedentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Suspects', 'Antecedents'],
        ];
        $ligneSuspectsAntecedents = $this->paginate($this->LigneSuspectsAntecedents);

        $this->set(compact('ligneSuspectsAntecedents'));
    }

    /**
     * View method
     *
     * @param string|null $id Ligne Suspects Antecedent id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ligneSuspectsAntecedent = $this->LigneSuspectsAntecedents->get($id, [
            'contain' => ['Suspects', 'Antecedents'],
        ]);

        $this->set('ligneSuspectsAntecedent', $ligneSuspectsAntecedent);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ligneSuspectsAntecedent = $this->LigneSuspectsAntecedents->newEntity();
        if ($this->request->is('post')) {
            $ligneSuspectsAntecedent = $this->LigneSuspectsAntecedents->patchEntity($ligneSuspectsAntecedent, $this->request->getData());
            if ($this->LigneSuspectsAntecedents->save($ligneSuspectsAntecedent)) {
                $this->Flash->success(__('The ligne suspects antecedent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ligne suspects antecedent could not be saved. Please, try again.'));
        }
        $suspects = $this->LigneSuspectsAntecedents->Suspects->find('list', ['limit' => 200]);
        $antecedents = $this->LigneSuspectsAntecedents->Antecedents->find('list', ['limit' => 200]);
        $this->set(compact('ligneSuspectsAntecedent', 'suspects', 'antecedents'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ligne Suspects Antecedent id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ligneSuspectsAntecedent = $this->LigneSuspectsAntecedents->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ligneSuspectsAntecedent = $this->LigneSuspectsAntecedents->patchEntity($ligneSuspectsAntecedent, $this->request->getData());
            if ($this->LigneSuspectsAntecedents->save($ligneSuspectsAntecedent)) {
                $this->Flash->success(__('The ligne suspects antecedent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ligne suspects antecedent could not be saved. Please, try again.'));
        }
        $suspects = $this->LigneSuspectsAntecedents->Suspects->find('list', ['limit' => 200]);
        $antecedents = $this->LigneSuspectsAntecedents->Antecedents->find('list', ['limit' => 200]);
        $this->set(compact('ligneSuspectsAntecedent', 'suspects', 'antecedents'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ligne Suspects Antecedent id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ligneSuspectsAntecedent = $this->LigneSuspectsAntecedents->get($id);
        if ($this->LigneSuspectsAntecedents->delete($ligneSuspectsAntecedent)) {
            $this->Flash->success(__('The ligne suspects antecedent has been deleted.'));
        } else {
            $this->Flash->error(__('The ligne suspects antecedent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
