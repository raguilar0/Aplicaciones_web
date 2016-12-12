<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Backgrounds Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Background get($primaryKey, $options = [])
 * @method \App\Model\Entity\Background newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Background[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Background|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Background patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Background[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Background findOrCreate($search, callable $callback = null)
 */
class BackgroundsTable extends Table
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

        $this->table('backgrounds');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('disease_1', 'create')
            ->notEmpty('disease_1');

        $validator
            ->requirePresence('disease_2', 'create')
            ->notEmpty('disease_2');

        $validator
            ->requirePresence('disease_3', 'create')
            ->notEmpty('disease_3');

        $validator
            ->requirePresence('disease_4', 'create')
            ->notEmpty('disease_4');

        $validator
            ->requirePresence('disease_5', 'create')
            ->notEmpty('disease_5');

        $validator
            ->requirePresence('disease_6', 'create')
            ->notEmpty('disease_6');

        $validator
            ->requirePresence('disease_7', 'create')
            ->notEmpty('disease_7');

        $validator
            ->requirePresence('disease_8', 'create')
            ->notEmpty('disease_8');

        $validator
            ->requirePresence('disease_9', 'create')
            ->notEmpty('disease_9');

        $validator
            ->requirePresence('disease_10', 'create')
            ->notEmpty('disease_10');

        $validator
            ->requirePresence('family_disease_1', 'create')
            ->notEmpty('family_disease_1');

        $validator
            ->requirePresence('family_disease_2', 'create')
            ->notEmpty('family_disease_2');

        $validator
            ->requirePresence('family_disease_3', 'create')
            ->notEmpty('family_disease_3');

        $validator
            ->requirePresence('family_disease_4', 'create')
            ->notEmpty('family_disease_1');


        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
