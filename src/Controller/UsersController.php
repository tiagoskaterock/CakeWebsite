<?php

declare(strict_types=1);
namespace App\Controller;
use Cake\Error\Debugger;
use Cake\Routing\Router;

class UsersController extends AppController
{

    function index()
    {
        $users = $this->Users->find()->all();
        $this->set(compact('users'));
    }


    function view($id = null)
    {
        $usersController = $this->UsersController->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('usersController'));
    }


    function add()
    {
        $user = $this->Users->newEmptyEntity();

        if ($this->request->is('post')) {

            $user = $this->Users->patchEntity($user, $this->request->getData());

            if($this->Users->save($user)) {
                $this->Flash->success('User created successfully');
                return $this->redirect(['action' => 'index']);
            }
            else{
                $this->Flash->error('User was not created, there was an error');
            }
        }

        $this->set(compact('user'));
    }

    
    function edit($id = null)
    {
        $usersController = $this->UsersController->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersController = $this->UsersController->patchEntity($usersController, $this->request->getData());
            if ($this->UsersController->save($usersController)) {
                $this->Flash->success(__('The users controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The users controller could not be saved. Please, try again.'));
        }
        $this->set(compact('usersController'));
    }

    
    function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersController = $this->UsersController->get($id);
        if ($this->UsersController->delete($usersController)) {
            $this->Flash->success(__('The users controller has been deleted.'));
        } else {
            $this->Flash->error(__('The users controller could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}