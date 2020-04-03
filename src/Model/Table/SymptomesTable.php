<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Symptomes Model
 *
 * @property \App\Model\Table\LigneSuspectsSymptomesTable&\Cake\ORM\Association\HasMany $LigneSuspectsSymptomes
 *
 * @method \App\Model\Entity\Symptome get($primaryKey, $options = [])
 * @method \App\Model\Entity\Symptome newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Symptome[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Symptome|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Symptome saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Symptome patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Symptome[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Symptome findOrCreate($search, callable $callback = null, $options = [])
 */
class SymptomesTable extends Table
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

        $this->setTable('symptomes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('LigneSuspectsSymptomes', [
            'foreignKey' => 'symptome_id',
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
            ->maxLength('libelle', 255)
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
