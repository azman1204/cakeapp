<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class FilmsTable extends Table {
    public function initialize(array $config) {
        parent::initialize($config);
        $this->setTable('film');
        $this->belongsToMany('Actors', [
            'joinTable' => 'film_actor'
        ]);
    }
}