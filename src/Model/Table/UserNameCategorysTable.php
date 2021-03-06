<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UserNameCategorys Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\HasMany $Users
 *
 * @method \App\Model\Entity\UserNameCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\UserNameCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UserNameCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UserNameCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserNameCategory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UserNameCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UserNameCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UserNameCategory findOrCreate($search, callable $callback = null, $options = [])
 */
class UserNameCategorysTable extends Table
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

        $this->setTable('user_name_categorys');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Users', [
            'foreignKey' => 'user_name_category_id'
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
            ->scalar('user_name_category_name')
            ->maxLength('user_name_category_name', 10)
            ->requirePresence('user_name_category_name', 'create')
            ->allowEmptyString('user_name_category_name', false);

        return $validator;
    }
}
