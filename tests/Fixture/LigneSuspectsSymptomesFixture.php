<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LigneSuspectsSymptomesFixture
 */
class LigneSuspectsSymptomesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'suspect_id' => ['type' => 'integer', 'length' => 50, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'symptome_id' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'symptome_id_ligne_suspects_symptomes_FK' => ['type' => 'index', 'columns' => ['symptome_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['suspect_id', 'symptome_id'], 'length' => []],
            'suspect_id_ligne_suspects_symptomes_FK' => ['type' => 'foreign', 'columns' => ['suspect_id'], 'references' => ['suspects', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'symptome_id_ligne_suspects_symptomes_FK' => ['type' => 'foreign', 'columns' => ['symptome_id'], 'references' => ['symptomes', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
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
                'suspect_id' => 1,
                'symptome_id' => 1,
            ],
        ];
        parent::init();
    }
}
