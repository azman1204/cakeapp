<?php
namespace App\Controller;

class FilmsController extends AppController {
    

    // search yg menggunakan friendsofcake/search
    public function search() {
        debug($this->request->getQuery());
        $query = $this->Films->find('search', [
            'search' => $this->request->getQuery()
        ]);
        
        debug($query);
        debug($query->all());
        die();
    }

    // query using model relationship
    public function films() {
        $films = $this->Films
        ->find('all', ['contain' => ['Actors']])
        ->where(['film_id IN' => [1,2,3]]);
        
        // dd($films->all());
        
        foreach($films as $film) {
            echo "<b> {$film->title} </b> <br>";
            foreach ($film->actors as $actor) {
                echo $actor->first_name . '<br>';
            }
            echo '<hr>';
        }

        die('');
    }


    public function index() {
        $films = $this->Films->find()->where(['title LIKE' => "%dark%"]);
        // dd($films->all());
        $this->set('films', $films);
        $this->set('no', 1);
    }

    public function customers() {
        $this->loadModel('Customer');
        $customers = $this->Customer->find('all', [
            'join' => [
                'table' => 'address',
                'alias' => 'taAddress',
                'type'  => 'INNER',
                'conditions' => ['customer.address_id = taAddress.address_id']
            ],
            'conditions' => [
                'customer_id IN' => [1,2,6]
            ],
            'fields' => ['customer.first_name', 'taAddress.address']
        ]);
        //dd($customers->all());
        foreach($customers as $customer) {
            echo $customer->customer['first_name'] . ' ' . $customer->taAddress['address'] . '<hr>';
        }

        die('');
    }

    public function actorFilm() {
        $films = $this->Films->find('all', [
            'join' => [
                [
                    'table' => 'film_actor',
                    'alias' => 'fa',
                    'type'  => 'INNER',
                    'conditions' => ['films.film_id = fa.film_id']
                ],
                [
                    'table' => 'actor',
                    'alias' => 'a',
                    'type'  => 'INNER',
                    'conditions' => ['fa.actor_id = a.actor_id']
                ]
            ],
            'conditions' => [
                'films.film_id IN' => [1,2,6]
            ],
            'fields' => ['films.title', 'a.first_name']
        ]);
        // dd($films->all());
        foreach($films as $film) {
            echo $film->films['title'] . ' ' . $film->a['first_name'] . '<hr>';
        }

        die('');
    }
} 