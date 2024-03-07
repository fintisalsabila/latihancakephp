<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Aksesorisruangan Controller
 *
 * @property \App\Model\Table\AksesorisruanganTable $Aksesorisruangan
 * @method \App\Model\Entity\Aksesorisruangan[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AksesorisruanganController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Ruangan'],
        ];
        $aksesorisruangan = $this->paginate($this->Aksesorisruangan);

        $this->set(compact('aksesorisruangan'));
    }

    /**
     * View method
     *
     * @param string|null $id Aksesorisruangan id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aksesorisruangan = $this->Aksesorisruangan->get($id, [
            'contain' => ['Ruangan'],
        ]);

        $this->set(compact('aksesorisruangan'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aksesorisruangan = $this->Aksesorisruangan->newEmptyEntity();
        if ($this->request->is('post')) {
            $aksesorisruangan = $this->Aksesorisruangan->patchEntity($aksesorisruangan, $this->request->getData());
            if ($this->Aksesorisruangan->save($aksesorisruangan)) {
                $this->Flash->success(__('The aksesorisruangan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aksesorisruangan could not be saved. Please, try again.'));
        }
        $ruangan = $this->Aksesorisruangan->Ruangan->find('list', ['limit' => 200])->all();
        $this->set(compact('aksesorisruangan', 'ruangan'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aksesorisruangan id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aksesorisruangan = $this->Aksesorisruangan->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aksesorisruangan = $this->Aksesorisruangan->patchEntity($aksesorisruangan, $this->request->getData());
            if ($this->Aksesorisruangan->save($aksesorisruangan)) {
                $this->Flash->success(__('The aksesorisruangan has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aksesorisruangan could not be saved. Please, try again.'));
        }
        $ruangan = $this->Aksesorisruangan->Ruangan->find('list', ['limit' => 200])->all();
        $this->set(compact('aksesorisruangan', 'ruangan'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aksesorisruangan id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aksesorisruangan = $this->Aksesorisruangan->get($id);
        if ($this->Aksesorisruangan->delete($aksesorisruangan)) {
            $this->Flash->success(__('The aksesorisruangan has been deleted.'));
        } else {
            $this->Flash->error(__('The aksesorisruangan could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
