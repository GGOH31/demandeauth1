<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Symptome Entity
 *
 * @property int $id
 * @property string|null $libelle
 * @property string|null $description
 *
 * @property \App\Model\Entity\LigneSuspectsSymptome[] $ligne_suspects_symptomes
 */
class Symptome extends Entity
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
        'libelle' => true,
        'description' => true,
        'ligne_suspects_symptomes' => true,
    ];
}
