<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PlansFixture
 *
 */
class PlansFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'user_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'dairy_product_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'vegetable_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'fruit_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'flour_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'meat_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'fat_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'explanation_id' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'explanation_fk' => ['type' => 'foreign', 'columns' => ['explanation_id'], 'references' => ['explanations', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'plans_dairy_fkey' => ['type' => 'foreign', 'columns' => ['dairy_product_id'], 'references' => ['dairy_products', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'plans_fat_fkey' => ['type' => 'foreign', 'columns' => ['fat_id'], 'references' => ['fats', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'plans_flour_fkey' => ['type' => 'foreign', 'columns' => ['flour_id'], 'references' => ['flours', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'plans_fruit_fkey' => ['type' => 'foreign', 'columns' => ['fruit_id'], 'references' => ['fruits', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'plans_id_user_fkey' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'plans_meat_fkey' => ['type' => 'foreign', 'columns' => ['meat_id'], 'references' => ['meats', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'plans_vegetable_fkey' => ['type' => 'foreign', 'columns' => ['vegetable_id'], 'references' => ['vegetables', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'user_id' => 1,
            'dairy_product_id' => 1,
            'vegetable_id' => 1,
            'fruit_id' => 1,
            'flour_id' => 1,
            'meat_id' => 1,
            'fat_id' => 1,
            'explanation_id' => 1
        ],
    ];
}
