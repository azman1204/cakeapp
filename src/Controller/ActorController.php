<?php
namespace App\Controller;
use Cake\Chronos\Chronos;

class ActorController extends AppController {
    use \Crud\Controller\ControllerTrait;

    public function initialize() {
        parent::initialize();
        $this->loadComponent('Crud.Crud', [
            'actions' => [
                'Crud.Index',
                'Crud.Edit',
                'Crud.View',
                'Crud.Add',
                'Crud.Delete'
            ]
        ]);
    }

    public function chronos() {
        printf("Now: %s", Chronos::now());
        die();
    }
}