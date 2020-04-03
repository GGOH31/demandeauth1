<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Statistique Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $jour_date
 * @property int $jour_nbre_cas
 * @property int $jour_nbre_gueris
 * @property int $jour_nbre_deces
 * @property int $total_nbre_cas
 * @property int $total_nbre_gueris
 * @property int $total_nbre_deces
 */
class Statistique extends Entity
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
        'jour_date' => true,
        'jour_nbre_cas' => true,
        'jour_nbre_gueris' => true,
        'jour_nbre_deces' => true,
        'total_nbre_cas' => true,
        'total_nbre_gueris' => true,
        'total_nbre_deces' => true,
    ];
}
