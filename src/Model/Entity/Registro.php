<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Registro Entity
 *
 * @property int $id
 * @property int $n_empleado
 * @property string $nombre
 * @property int $pasos
 * @property \Cake\I18n\Time $fecha
 * @property \Cake\I18n\Time $create
 * @property \Cake\I18n\Time $modified
 */
class Registro extends Entity
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
        '*' => true,
        'id_registro' => false
    ];
}
