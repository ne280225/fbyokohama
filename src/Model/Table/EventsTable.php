<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 *
 * @property \App\Model\Table\ParticipationPlansTable|\Cake\ORM\Association\HasMany $ParticipationPlans
 *
 * @method \App\Model\Entity\Event get($primaryKey, $options = [])
 * @method \App\Model\Entity\Event newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Event[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Event|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Event[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Event findOrCreate($search, callable $callback = null, $options = [])
 */
class EventsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('events');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('ParticipationPlans', [
            'foreignKey' => 'event_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('event_name')
            ->maxLength('event_name', 30)
            ->requirePresence('event_name', 'create')
            ->allowEmptyString('event_name', false);

        $validator
            ->scalar('event_place')
            ->maxLength('event_place', 30)
            ->requirePresence('event_place', 'create')
            ->allowEmptyString('event_place', false);

        $validator
            ->dateTime('event_start_time')
            ->requirePresence('event_start_time', 'create')
            ->allowEmptyDateTime('event_start_time', false);

        $validator
            ->dateTime('event_end_time')
            ->requirePresence('event_end_time', 'create')
            ->allowEmptyDateTime('event_end_time', false);

        return $validator;
    }
}
