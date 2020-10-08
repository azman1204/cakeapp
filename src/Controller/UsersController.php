<?php
namespace App\Controller;

class UsersController extends AppController {
    public function create() {
        $this->set('user', $this->Users->newEntity());
        $this->render('form');
    }

    public function save() {
        $data = [
            'user_id' => 'azman',
            'name' => 'Azman Zakaria',
            'email' => ''
        ];

        $data = $this->request->getData();

        $user = $this->Users->newEntity($data);
        if($user->getErrors()) {
            print_r($user->getErrors());
            $this->set(compact('user'));
            $this->render('form');
        } else {
            $this->Users->save($user);
            echo "data has been saved";
            die('');
        }
    }

    // test session - https://book.cakephp.org/3/en/development/sessions.html
    public function page1() {
        $session = $this->getRequest()->getSession();
        $session->write('name', 'Azman bin Zakaria'); // set here
        $this->redirect('users/page2');
    }

    public function page2() {
        $session = $this->getRequest()->getSession();
        echo "Nama anda = " . $session->read('name'); // read here
        die('');
    }
} 