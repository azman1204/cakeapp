<?php
namespace App\Model\Table;
use Cake\ORM\Table;
use Search\Manager;

class FilmsTable extends Table {
    public function initialize(array $config) {
        parent::initialize($config);
        $this->setTable('film');
        $this->belongsToMany('Actors', [
            'joinTable' => 'film_actor'
        ]);

        // add behaviour to your table
        $this->addBehavior('Search.Search');

        // setup search filter using search manager
        $this->searchManager()
            // Here we will alias the 'q' query param to search the `Film.title`
            // field and the `Film.content` field, using a LIKE match, with `%`
            // both before and after.
            //->value('film_id');
            ->add('q', 'Search.Like', [
                'before'      => true,
                'after'       => true,
                'fieldMode'   => 'OR',
                'comparison'  => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field'       => ['title', 'description']
            ])
            ->add('foo', 'Search.Callback', [
                'callback' => function ($query, $args, $filter) {
                    // Modify $query as required
                }
            ]);
    }
}