<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TrancheAges Model
 *
 * @property \App\Model\Table\SuspectsTable&\Cake\ORM\Association\HasMany $Suspects
 *
 * @method \App\Model\Entity\TrancheAge get($primaryKey, $options = [])
 * @method \App\Model\Entity\TrancheAge newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TrancheAge[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TrancheAge|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrancheAge saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TrancheAge patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TrancheAge[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TrancheAge findOrCreate($search, callable $callback = null, $options = [])
 */
class TrancheAgesTable extends Table
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

        $this->setTable('tranche_ages');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Suspects', [
            'foreignKey' => 'tranche_age_id',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('tranche')
            ->maxLength('tranche', 100)
            ->allowEmptyString('tranche')
            ->add('tranche', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

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
        $rules->add($rules->isUnique(['tranche']));

        return $rules;
    }
}
