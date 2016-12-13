<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Plans Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\BelongsTo $DairyProducts
 * @property \Cake\ORM\Association\BelongsTo $Vegetables
 * @property \Cake\ORM\Association\BelongsTo $Fruits
 * @property \Cake\ORM\Association\BelongsTo $Flours
 * @property \Cake\ORM\Association\BelongsTo $Meats
 * @property \Cake\ORM\Association\BelongsTo $Fats
 * @property \Cake\ORM\Association\BelongsTo $Explanations
 *
 * @method \App\Model\Entity\Plan get($primaryKey, $options = [])
 * @method \App\Model\Entity\Plan newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Plan[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Plan|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Plan patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Plan[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Plan findOrCreate($search, callable $callback = null)
 */
class PlansTable extends Table
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

        $this->table('plans');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id'
        ]);
        $this->belongsTo('DairyProducts', [
            'foreignKey' => 'dairy_product_id'
        ]);
        $this->belongsTo('Vegetables', [
            'foreignKey' => 'vegetable_id'
        ]);
        $this->belongsTo('Fruits', [
            'foreignKey' => 'fruit_id'
        ]);
        $this->belongsTo('Flours', [
            'foreignKey' => 'flour_id'
        ]);
        $this->belongsTo('Meats', [
            'foreignKey' => 'meat_id'
        ]);
        $this->belongsTo('Fats', [
            'foreignKey' => 'fat_id'
        ]);
        $this->belongsTo('Explanations', [
            'foreignKey' => 'explanation_id'
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
        $rules->add($rules->existsIn(['dairy_product_id'], 'DairyProducts'));
        $rules->add($rules->existsIn(['vegetable_id'], 'Vegetables'));
        $rules->add($rules->existsIn(['fruit_id'], 'Fruits'));
        $rules->add($rules->existsIn(['flour_id'], 'Flours'));
        $rules->add($rules->existsIn(['meat_id'], 'Meats'));
        $rules->add($rules->existsIn(['fat_id'], 'Fats'));
        $rules->add($rules->existsIn(['explanation_id'], 'Explanations'));

        return $rules;
    }
}
