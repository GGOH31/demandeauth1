<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ConsignesSecurites Controller
 *
 * @property \App\Model\Table\ConsignesSecuritesTable $ConsignesSecurites
 *
 * @method \App\Model\Entity\ConsignesSecurite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ConsignesSecuritesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $consignesSecurites = $this->paginate($this->ConsignesSecurites);

        $this->set(compact('consignesSecurites'));
    }

    /**
     * View method
     *
     * @param string|null $id Consignes Securite id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $consignesSecurite = $this->ConsignesSecurites->get($id, [
            'contain' => [],
        ]);

        $this->set('consignesSecurite', $consignesSecurite);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $consignesSecurite = $this->ConsignesSecurites->newEntity();
        if ($this->request->is('post')) {
            $consignesSecurite = $this->ConsignesSecurites->patchEntity($consignesSecurite, $this->request->getData());
            if ($this->ConsignesSecurites->save($consignesSecurite)) {
                $this->Flash->success(__('The consignes securite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consignes securite could not be saved. Please, try again.'));
        }
        $this->set(compact('consignesSecurite'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Consignes Securite id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $consignesSecurite = $this->ConsignesSecurites->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $consignesSecurite = $this->ConsignesSecurites->patchEntity($consignesSecurite, $this->request->getData());
            if ($this->ConsignesSecurites->save($consignesSecurite)) {
                $this->Flash->success(__('The consignes securite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The consignes securite could not be saved. Please, try again.'));
        }
        $this->set(compact('consignesSecurite'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Consignes Securite id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $consignesSecurite = $this->ConsignesSecurites->get($id);
        if ($this->ConsignesSecurites->delete($consignesSecurite)) {
            $this->Flash->success(__('The consignes securite has been deleted.'));
        } else {
            $this->Flash->error(__('The consignes securite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
