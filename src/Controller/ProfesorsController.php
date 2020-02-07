<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Profesors Controller
 *
 * @property \App\Model\Table\ProfesorsTable $Profesors
 *
 * @method \App\Model\Entity\Profesor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfesorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Materias'],
        ];
        $profesors = $this->paginate($this->Profesors);

        $this->set(compact('profesors'));
    }

    /**
     * View method
     *
     * @param string|null $id Profesor id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $profesor = $this->Profesors->get($id, [
            'contain' => ['Materias'],
        ]);

        $this->set('profesor', $profesor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $profesor = $this->Profesors->newEmptyEntity();
        if ($this->request->is('post')) {
            $profesor = $this->Profesors->patchEntity($profesor, $this->request->getData());
            if ($this->Profesors->save($profesor)) {
                $this->Flash->success(__('The profesor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profesor could not be saved. Please, try again.'));
        }
        $materias = $this->Profesors->Materias->find('list', ['limit' => 200]);

        $this->set(compact('profesor', 'materias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Profesor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $profesor = $this->Profesors->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $profesor = $this->Profesors->patchEntity($profesor, $this->request->getData());
            if ($this->Profesors->save($profesor)) {
                $this->Flash->success(__('The profesor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The profesor could not be saved. Please, try again.'));
        }
        $materias = $this->Profesors->Materias->find('list', ['limit' => 200]);
        $this->set(compact('profesor', 'materias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Profesor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $profesor = $this->Profesors->get($id);
        if ($this->Profesors->delete($profesor)) {
            $this->Flash->success(__('The profesor has been deleted.'));
        } else {
            $this->Flash->error(__('The profesor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
