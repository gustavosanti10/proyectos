<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Profesor Entity
 *
 * @property int $id
 * @property string $ci
 * @property string $nombres
 * @property string $contrato
 * @property int $materia_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Materia $materia
 */
class Profesor extends Entity
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
        'ci' => true,
        'nombres' => true,
        'contrato' => true,
        'materia_id' => true,
        'created' => true,
        'modified' => true,
        'materia' => true,
    ];
}
