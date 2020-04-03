<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LigneSuspectsSymptomes Model
 *
 * @property \App\Model\Table\SuspectsTable&\Cake\ORM\Association\BelongsTo $Suspects
 * @property \App\Model\Table\SymptomesTable&\Cake\ORM\Association\BelongsTo $Symptomes
 *
 * @method \App\Model\Entity\LigneSuspectsSymptome get($primaryKey, $options = [])
 * @method \App\Model\Entity\LigneSuspectsSymptome newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LigneSuspectsSymptome[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LigneSuspectsSymptome|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LigneSuspectsSymptome saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LigneSuspectsSymptome patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LigneSuspectsSymptome[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LigneSuspectsSymptome findOrCreate($search, callable $callback = null, $options = [])
 */
class LigneSuspectsSymptomesTable extends Table
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

        $this->setTable('ligne_suspects_symptomes');
        $this->setDisplayField('suspect_id');
        $this->setPrimaryKey(['suspect_id', 'symptome_id']);

        $this->belongsTo('Suspects', [
            'foreignKey' => 'suspect_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Symptomes', [
            'foreignKey' => 'symptome_id',
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
        $rules->add($rules->existsIn(['symptome_id'], 'Symptomes'));

        return $rules;
    }
}
