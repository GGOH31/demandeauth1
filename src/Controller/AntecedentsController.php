<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Antecedents Controller
 *
 * @property \App\Model\Table\AntecedentsTable $Antecedents
 *
 * @method \App\Model\Entity\Antecedent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AntecedentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $antecedents = $this->paginate($this->Antecedents);

        $this->set(compact('antecedents'));
    }

    /**
     * View method
     *
     * @param string|null $id Antecedent id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $antecedent = $this->Antecedents->get($id, [
            'contain' => ['LigneSuspectsAntecedents'],
        ]);

        $this->set('antecedent', $antecedent);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $antecedent = $this->Antecedents->newEntity();
        if ($this->request->is('post')) {
            $antecedent = $this->Antecedents->patchEntity($antecedent, $this->request->getData());
            if ($this->Antecedents->save($antecedent)) {
                $this->Flash->success(__('The antecedent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The antecedent could not be saved. Please, try again.'));
        }
        $this->set(compact('antecedent'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Antecedent id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $antecedent = $this->Antecedents->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $antecedent = $this->Antecedents->patchEntity($antecedent, $this->request->getData());
            if ($this->Antecedents->save($antecedent)) {
                $this->Flash->success(__('The antecedent has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The antecedent could not be saved. Please, try again.'));
        }
        $this->set(compact('antecedent'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Antecedent id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $antecedent = $this->Antecedents->get($id);
        if ($this->Antecedents->delete($antecedent)) {
            $this->Flash->success(__('The antecedent has been deleted.'));
        } else {
            $this->Flash->error(__('The antecedent could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
