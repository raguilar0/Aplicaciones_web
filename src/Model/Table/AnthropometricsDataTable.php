<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AnthropometricsData Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\AnthropometricsData get($primaryKey, $options = [])
 * @method \App\Model\Entity\AnthropometricsData newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AnthropometricsData[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AnthropometricsData|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AnthropometricsData patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AnthropometricsData[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AnthropometricsData findOrCreate($search, callable $callback = null)
 */
class AnthropometricsDataTable extends Table
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

        $this->table('anthropometrics_data');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
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
            ->date('date')
            ->allowEmpty('date');

        $validator
            ->decimal('height')
            ->allowEmpty('height');

        $validator
            ->decimal('weight')
            ->allowEmpty('weight');

        $validator
            ->decimal('waist_circumference')
            ->allowEmpty('waist_circumference');

        $validator
            ->decimal('hip_circumference')
            ->allowEmpty('hip_circumference');

        $validator
            ->decimal('em')
            ->allowEmpty('em');

        $validator
            ->decimal('total_fat')
            ->allowEmpty('total_fat');

        $validator
            ->decimal('visceral_fat')
            ->allowEmpty('visceral_fat');

        $validator
            ->decimal('imc')
            ->allowEmpty('imc');

        $validator
            ->decimal('muscle')
            ->allowEmpty('muscle');

        $validator
            ->integer('skindfolds')
            ->allowEmpty('skindfolds');

        $validator
            ->decimal('triceps')
            ->allowEmpty('triceps');

        $validator
            ->decimal('subscapular')
            ->allowEmpty('subscapular');

        $validator
            ->decimal('abdominal')
            ->allowEmpty('abdominal');

        $validator
            ->decimal('sp')
            ->allowEmpty('sp');

        $validator
            ->allowEmpty('blood_pressure');

        $validator
            ->integer('pulse')
            ->allowEmpty('pulse');

        $validator
            ->decimal('weight_goal')
            ->allowEmpty('weight_goal');

        $validator
            ->decimal('fat_goal')
            ->allowEmpty('fat_goal');

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
