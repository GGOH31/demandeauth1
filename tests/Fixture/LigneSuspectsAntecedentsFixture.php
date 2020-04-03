<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LigneSuspectsAntecedentsFixture
 */
class LigneSuspectsAntecedentsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'suspect_id' => ['type' => 'integer', 'length' => 50, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'antecedent_id' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'antecedent_id_ligne_suspects_antecedents_FK' => ['type' => 'index', 'columns' => ['antecedent_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['suspect_id', 'antecedent_id'], 'length' => []],
            'antecedent_id_ligne_suspects_antecedents_FK' => ['type' => 'foreign', 'columns' => ['antecedent_id'], 'references' => ['antecedents', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'suspect_id_ligne_suspects_antecedents_FK' => ['type' => 'foreign', 'columns' => ['suspect_id'], 'references' => ['suspects', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'antecedent_id' => 1,
            ],
        ];
        parent::init();
    }
}
