<?php
namespace App\Model\Table;
use Cake\ORM\Table;

class ActorsTable extends Table {
    public function initialize(array $config) {
        parent::initialize($config);
        $this->setTable('actor');
    }
}