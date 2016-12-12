<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LifeStyleFixture
 *
 */
class LifeStyleFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'life_style';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'smoker' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'alcohol' => ['type' => 'string', 'length' => 50, 'default' => 'false', 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'AF' => ['type' => 'string', 'length' => 100, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'observation' => ['type' => 'string', 'length' => 150, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'objective' => ['type' => 'string', 'length' => 128, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null, 'fixed' => null],
        'id_user' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'life_style_id_user_fkey' => ['type' => 'foreign', 'columns' => ['id_user'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'smoker' => 'Lorem ipsum dolor sit amet',
            'alcohol' => 'Lorem ipsum dolor sit amet',
            'AF' => 'Lorem ipsum dolor sit amet',
            'observation' => 'Lorem ipsum dolor sit amet',
            'objective' => 'Lorem ipsum dolor sit amet',
            'id_user' => 1
        ],
    ];
}
