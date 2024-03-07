<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Mobil Controller
 *
 * @property \App\Model\Table\MobilTable $Mobil
 * @method \App\Model\Entity\Mobil[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MobilController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $mobil = $this->paginate($this->Mobil);

        $this->set(compact('mobil'));
    }

    /**
     * View method
     *
     * @param string|null $id Mobil id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mobil = $this->Mobil->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('mobil'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mobil = $this->Mobil->newEmptyEntity();
        if ($this->request->is('post')) {
            $mobil = $this->Mobil->patchEntity($mobil, $this->request->getData());
            if ($this->Mobil->save($mobil)) {
                $this->Flash->success(__('The mobil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mobil could not be saved. Please, try again.'));
        }
        $this->set(compact('mobil'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mobil id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mobil = $this->Mobil->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mobil = $this->Mobil->patchEntity($mobil, $this->request->getData());
            if ($this->Mobil->save($mobil)) {
                $this->Flash->success(__('The mobil has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mobil could not be saved. Please, try again.'));
        }
        $this->set(compact('mobil'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mobil id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mobil = $this->Mobil->get($id);
        if ($this->Mobil->delete($mobil)) {
            $this->Flash->success(__('The mobil has been deleted.'));
        } else {
            $this->Flash->error(__('The mobil could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
