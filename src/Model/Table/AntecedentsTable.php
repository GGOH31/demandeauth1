<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Antecedents Model
 *
 * @property \App\Model\Table\LigneSuspectsAntecedentsTable&\Cake\ORM\Association\HasMany $LigneSuspectsAntecedents
 *
 * @method \App\Model\Entity\Antecedent get($primaryKey, $options = [])
 * @method \App\Model\Entity\Antecedent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Antecedent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Antecedent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Antecedent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Antecedent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Antecedent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Antecedent findOrCreate($search, callable $callback = null, $options = [])
 */
class AntecedentsTable extends Table
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

        $this->setTable('antecedents');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('LigneSuspectsAntecedents', [
            'foreignKey' => 'antecedent_id',
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
            ->scalar('libelle')
            ->maxLength('libelle', 250)
            ->allowEmptyString('libelle')
            ->add('libelle', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['libelle']));

        return $rules;
    }
}
