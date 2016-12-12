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
            ->requirePresence('heart_disease', 'create')
            ->notEmpty('heart_disease');

        $validator
            ->requirePresence('HTA', 'create')
            ->notEmpty('HTA');

        $validator
            ->requirePresence('diabetes', 'create')
            ->notEmpty('diabetes');

        $validator
            ->requirePresence('dyslipidemia', 'create')
            ->notEmpty('dyslipidemia');

        $validator
            ->requirePresence('allergy', 'create')
            ->notEmpty('allergy');

        $validator
            ->requirePresence('ulcer', 'create')
            ->notEmpty('ulcer');

        $validator
            ->requirePresence('bone_problem', 'create')
            ->notEmpty('bone_problem');

        $validator
            ->requirePresence('gastritis', 'create')
            ->notEmpty('gastritis');

        $validator
            ->requirePresence('colitis', 'create')
            ->notEmpty('colitis');

        $validator
            ->requirePresence('stress', 'create')
            ->notEmpty('stress');

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
