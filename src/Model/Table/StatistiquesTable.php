<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Statistiques Model
 *
 * @method \App\Model\Entity\Statistique get($primaryKey, $options = [])
 * @method \App\Model\Entity\Statistique newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Statistique[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Statistique|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Statistique saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Statistique patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Statistique[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Statistique findOrCreate($search, callable $callback = null, $options = [])
 */
class StatistiquesTable extends Table
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

        $this->setTable('statistiques');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->date('jour_date')
            ->requirePresence('jour_date', 'create')
            ->notEmptyDate('jour_date');

        $validator
            ->integer('jour_nbre_cas')
            ->notEmptyString('jour_nbre_cas');

        $validator
            ->integer('jour_nbre_gueris')
            ->notEmptyString('jour_nbre_gueris');

        $validator
            ->integer('jour_nbre_deces')
            ->notEmptyString('jour_nbre_deces');

        $validator
            ->integer('total_nbre_cas')
            ->requirePresence('total_nbre_cas', 'create')
            ->notEmptyString('total_nbre_cas');

        $validator
            ->integer('total_nbre_gueris')
            ->requirePresence('total_nbre_gueris', 'create')
            ->notEmptyString('total_nbre_gueris');

        $validator
            ->integer('total_nbre_deces')
            ->requirePresence('total_nbre_deces', 'create')
            ->notEmptyString('total_nbre_deces');

        return $validator;
    }
}
