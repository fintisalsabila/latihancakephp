<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Aplikasimeeting Controller
 *
 * @property \App\Model\Table\AplikasimeetingTable $Aplikasimeeting
 * @method \App\Model\Entity\Aplikasimeeting[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AplikasimeetingController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $aplikasimeeting = $this->paginate($this->Aplikasimeeting);

        $this->set(compact('aplikasimeeting'));
    }

    /**
     * View method
     *
     * @param string|null $id Aplikasimeeting id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aplikasimeeting = $this->Aplikasimeeting->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('aplikasimeeting'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aplikasimeeting = $this->Aplikasimeeting->newEmptyEntity();
        if ($this->request->is('post')) {
            $aplikasimeeting = $this->Aplikasimeeting->patchEntity($aplikasimeeting, $this->request->getData());
            if ($this->Aplikasimeeting->save($aplikasimeeting)) {
                $this->Flash->success(__('The aplikasimeeting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aplikasimeeting could not be saved. Please, try again.'));
        }
        $this->set(compact('aplikasimeeting'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aplikasimeeting id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aplikasimeeting = $this->Aplikasimeeting->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aplikasimeeting = $this->Aplikasimeeting->patchEntity($aplikasimeeting, $this->request->getData());
            if ($this->Aplikasimeeting->save($aplikasimeeting)) {
                $this->Flash->success(__('The aplikasimeeting has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aplikasimeeting could not be saved. Please, try again.'));
        }
        $this->set(compact('aplikasimeeting'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aplikasimeeting id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aplikasimeeting = $this->Aplikasimeeting->get($id);
        if ($this->Aplikasimeeting->delete($aplikasimeeting)) {
            $this->Flash->success(__('The aplikasimeeting has been deleted.'));
        } else {
            $this->Flash->error(__('The aplikasimeeting could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
