<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TrancheAges Controller
 *
 * @property \App\Model\Table\TrancheAgesTable $TrancheAges
 *
 * @method \App\Model\Entity\TrancheAge[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TrancheAgesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $trancheAges = $this->paginate($this->TrancheAges);

        $this->set(compact('trancheAges'));
    }

    /**
     * View method
     *
     * @param string|null $id Tranche Age id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $trancheAge = $this->TrancheAges->get($id, [
            'contain' => ['Suspects'],
        ]);

        $this->set('trancheAge', $trancheAge);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $trancheAge = $this->TrancheAges->newEntity();
        if ($this->request->is('post')) {
            $trancheAge = $this->TrancheAges->patchEntity($trancheAge, $this->request->getData());
            if ($this->TrancheAges->save($trancheAge)) {
                $this->Flash->success(__('The tranche age has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tranche age could not be saved. Please, try again.'));
        }
        $this->set(compact('trancheAge'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tranche Age id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $trancheAge = $this->TrancheAges->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $trancheAge = $this->TrancheAges->patchEntity($trancheAge, $this->request->getData());
            if ($this->TrancheAges->save($trancheAge)) {
                $this->Flash->success(__('The tranche age has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tranche age could not be saved. Please, try again.'));
        }
        $this->set(compact('trancheAge'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tranche Age id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $trancheAge = $this->TrancheAges->get($id);
        if ($this->TrancheAges->delete($trancheAge)) {
            $this->Flash->success(__('The tranche age has been deleted.'));
        } else {
            $this->Flash->error(__('The tranche age could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
