<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DemandeAutorisations Controller
 *
 * @property \App\Model\Table\DemandeAutorisationsTable $DemandeAutorisations
 *
 * @method \App\Model\Entity\DemandeAutorisation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DemandeAutorisationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Motifs', 'Demandeurs', 'Utilisateurs'],
        ];
        $demandeAutorisations = $this->paginate($this->DemandeAutorisations);

        $this->set(compact('demandeAutorisations'));
    }

    /**
     * View method
     *
     * @param string|null $id Demande Autorisation id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $demandeAutorisation = $this->DemandeAutorisations->get($id, [
            'contain' => ['Motifs', 'Demandeurs', 'Utilisateurs'],
        ]);

        $this->set('demandeAutorisation', $demandeAutorisation);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $demandeAutorisation = $this->DemandeAutorisations->newEntity();
        if ($this->request->is('post')) {
            $demandeAutorisation = $this->DemandeAutorisations->patchEntity($demandeAutorisation, $this->request->getData());
            if ($this->DemandeAutorisations->save($demandeAutorisation)) {
                $this->Flash->success(__('The demande autorisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demande autorisation could not be saved. Please, try again.'));
        }
        $motifs = $this->DemandeAutorisations->Motifs->find('list', ['limit' => 200]);
        $demandeurs = $this->DemandeAutorisations->Demandeurs->find('list', ['limit' => 200]);
        $utilisateurs = $this->DemandeAutorisations->Utilisateurs->find('list', ['limit' => 200]);
        $this->set(compact('demandeAutorisation', 'motifs', 'demandeurs', 'utilisateurs'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Demande Autorisation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $demandeAutorisation = $this->DemandeAutorisations->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $demandeAutorisation = $this->DemandeAutorisations->patchEntity($demandeAutorisation, $this->request->getData());
            if ($this->DemandeAutorisations->save($demandeAutorisation)) {
                $this->Flash->success(__('The demande autorisation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demande autorisation could not be saved. Please, try again.'));
        }
        $motifs = $this->DemandeAutorisations->Motifs->find('list', ['limit' => 200]);
        $demandeurs = $this->DemandeAutorisations->Demandeurs->find('list', ['limit' => 200]);
        $utilisateurs = $this->DemandeAutorisations->Utilisateurs->find('list', ['limit' => 200]);
        $this->set(compact('demandeAutorisation', 'motifs', 'demandeurs', 'utilisateurs'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Demande Autorisation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $demandeAutorisation = $this->DemandeAutorisations->get($id);
        if ($this->DemandeAutorisations->delete($demandeAutorisation)) {
            $this->Flash->success(__('The demande autorisation has been deleted.'));
        } else {
            $this->Flash->error(__('The demande autorisation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
