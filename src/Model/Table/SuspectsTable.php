<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Suspects Model
 *
 * @property \App\Model\Table\TrancheAgesTable&\Cake\ORM\Association\BelongsTo $TrancheAges
 * @property \App\Model\Table\LigneSuspectsAntecedentsTable&\Cake\ORM\Association\HasMany $LigneSuspectsAntecedents
 * @property \App\Model\Table\LigneSuspectsSymptomesTable&\Cake\ORM\Association\HasMany $LigneSuspectsSymptomes
 *
 * @method \App\Model\Entity\Suspect get($primaryKey, $options = [])
 * @method \App\Model\Entity\Suspect newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Suspect[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Suspect|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Suspect saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Suspect patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Suspect[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Suspect findOrCreate($search, callable $callback = null, $options = [])
 */
class SuspectsTable extends Table
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

        $this->setTable('suspects');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('TrancheAges', [
            'foreignKey' => 'tranche_age_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('LigneSuspectsAntecedents', [
            'foreignKey' => 'suspect_id',
        ]);
        $this->hasMany('LigneSuspectsSymptomes', [
            'foreignKey' => 'suspect_id',
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
            ->scalar('emetteur_contact')
            ->maxLength('emetteur_contact', 15)
            ->requirePresence('emetteur_contact', 'create')
            ->notEmptyString('emetteur_contact');

        $validator
            ->scalar('suspect_nom')
            ->maxLength('suspect_nom', 50)
            ->allowEmptyString('suspect_nom');

        $validator
            ->scalar('suspect_contact')
            ->maxLength('suspect_contact', 50)
            ->allowEmptyString('suspect_contact');

        $validator
            ->scalar('suspect_situation_geo')
            ->maxLength('suspect_situation_geo', 255)
            ->allowEmptyString('suspect_situation_geo');

        $validator
            ->date('suspect_date_naissance')
            ->allowEmptyDate('suspect_date_naissance');

        $validator
            ->scalar('suspect_sexe')
            ->requirePresence('suspect_sexe', 'create')
            ->notEmptyString('suspect_sexe');

        $validator
            ->scalar('suspect_etat')
            ->notEmptyString('suspect_etat');

        $validator
            ->date('date_declaration')
            ->requirePresence('date_declaration', 'create')
            ->notEmptyDate('date_declaration');

        $validator
            ->time('heure_declaration')
            ->requirePresence('heure_declaration', 'create')
            ->notEmptyTime('heure_declaration');

        $validator
            ->scalar('longitude')
            ->maxLength('longitude', 15)
            ->allowEmptyString('longitude');

        $validator
            ->scalar('latitude')
            ->maxLength('latitude', 15)
            ->allowEmptyString('latitude');

        $validator
            ->scalar('commentaire_suspect')
            ->allowEmptyString('commentaire_suspect');

        $validator
            ->scalar('commentaire_analyse')
            ->allowEmptyString('commentaire_analyse');

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
        $rules->add($rules->existsIn(['tranche_age_id'], 'TrancheAges'));

        return $rules;
    }
}
