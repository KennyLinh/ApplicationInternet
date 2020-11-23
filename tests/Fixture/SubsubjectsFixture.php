<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SubsubjectsFixture
 */
class SubsubjectsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'ID subsubject', 'autoIncrement' => true, 'precision' => null],
        'department_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'department_id', 'precision' => null, 'autoIncrement' => null],
        'selection_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'selection_id', 'precision' => null, 'autoIncrement' => null],
        'code' => ['type' => 'string', 'length' => 9, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => 'code subsubjects', 'precision' => null, 'fixed' => null],
        'name' => ['type' => 'string', 'length' => 80, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => 'name subsubjects', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'department_id' => ['type' => 'index', 'columns' => ['department_id'], 'length' => []],
            'selection_id' => ['type' => 'index', 'columns' => ['selection_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'subsubject_ibfk_1' => ['type' => 'foreign', 'columns' => ['department_id'], 'references' => ['departments', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'subsubject_ibfk_2' => ['type' => 'foreign', 'columns' => ['selection_id'], 'references' => ['selections', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'department_id' => 1,
                'selection_id' => 1,
                'code' => 'Lorem i',
                'name' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
