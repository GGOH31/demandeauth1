<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Suspect Entity
 *
 * @property int $id
 * @property int $tranche_age_id
 * @property string $emetteur_contact
 * @property string|null $suspect_nom
 * @property string|null $suspect_contact
 * @property string|null $suspect_situation_geo
 * @property \Cake\I18n\FrozenDate|null $suspect_date_naissance
 * @property string $suspect_sexe
 * @property string $suspect_etat
 * @property \Cake\I18n\FrozenDate $date_declaration
 * @property \Cake\I18n\FrozenTime $heure_declaration
 * @property string|null $longitude
 * @property string|null $latitude
 * @property string|null $commentaire_suspect
 * @property string|null $commentaire_analyse
 *
 * @property \App\Model\Entity\TrancheAge $tranche_age
 * @property \App\Model\Entity\LigneSuspectsAntecedent[] $ligne_suspects_antecedents
 * @property \App\Model\Entity\LigneSuspectsSymptome[] $ligne_suspects_symptomes
 */
class Suspect extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'tranche_age_id' => true,
        'emetteur_contact' => true,
        'suspect_nom' => true,
        'suspect_contact' => true,
        'suspect_situation_geo' => true,
        'suspect_date_naissance' => true,
        'suspect_sexe' => true,
        'suspect_etat' => true,
        'date_declaration' => true,
        'heure_declaration' => true,
        'longitude' => true,
        'latitude' => true,
        'commentaire_suspect' => true,
        'commentaire_analyse' => true,
        'tranche_age' => true,
        'ligne_suspects_antecedents' => true,
        'ligne_suspects_symptomes' => true,
    ];
}
