<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ruangan Controller
 *
 * @property \App\Model\Table\RuanganTable $Ruangan
 * @method \App\Model\Entity\Ruangan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RuanganController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $ruangan = $this->paginate($this->Ruangan);

        $this->set(compact('ruangan'));
    }

    /**
     * View method
     *
     * @param string|null $id Ruangan id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ruangan = $this->Ruangan->get($id, [
            'contain' => ['Aksesorisruangan'],
        ]);

        $this->set(compact('ruangan'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ruangan = $this->Ruangan->newEmptyEntity();
        if ($this->request->is('post')) {
            $ruangan = $this->Ruangan->patchEntity($ruangan, $this->request->getData());
            if ($this->Ruangan->save($ruangan)) {
                $this->Flash->success(__('The ruangan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ruangan could not be saved. Please, try again.'));
        }
        $this->set(compact('ruangan'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ruangan id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ruangan = $this->Ruangan->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ruangan = $this->Ruangan->patchEntity($ruangan, $this->request->getData());
            if ($this->Ruangan->save($ruangan)) {
                $this->Flash->success(__('The ruangan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ruangan could not be saved. Please, try again.'));
        }
        $this->set(compact('ruangan'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ruangan id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ruangan = $this->Ruangan->get($id);
        if ($this->Ruangan->delete($ruangan)) {
            $this->Flash->success(__('The ruangan has been deleted.'));
        } else {
            $this->Flash->error(__('The ruangan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
