<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LigneSuspectsAntecedents Model
 *
 * @property \App\Model\Table\SuspectsTable&\Cake\ORM\Association\BelongsTo $Suspects
 * @property \App\Model\Table\AntecedentsTable&\Cake\ORM\Association\BelongsTo $Antecedents
 *
 * @method \App\Model\Entity\LigneSuspectsAntecedent get($primaryKey, $options = [])
 * @method \App\Model\Entity\LigneSuspectsAntecedent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LigneSuspectsAntecedent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LigneSuspectsAntecedent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LigneSuspectsAntecedent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LigneSuspectsAntecedent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LigneSuspectsAntecedent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LigneSuspectsAntecedent findOrCreate($search, callable $callback = null, $options = [])
 */
class LigneSuspectsAntecedentsTable extends Table
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

        $this->setTable('ligne_suspects_antecedents');
        $this->setDisplayField('suspect_id');
        $this->setPrimaryKey(['suspect_id', 'antecedent_id']);

        $this->belongsTo('Suspects', [
            'foreignKey' => 'suspect_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Antecedents', [
            'foreignKey' => 'antecedent_id',
            'joinType' => 'INNER',
        ]);
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
        $rules->add($rules->existsIn(['suspect_id'], 'Suspects'));
        $rules->add($rules->existsIn(['antecedent_id'], 'Antecedents'));

        return $rules;
    }
}
