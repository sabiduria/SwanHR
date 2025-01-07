<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dependent Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $relationship_id
 * @property string|null $fistname
 * @property string|null $secondname
 * @property string|null $lastname
 * @property string|null $gender
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 * @property string|null $createdby
 * @property string|null $modifiedby
 * @property bool|null $deleted
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Relationship $relationship
 */
class Dependent extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'user_id' => true,
        'relationship_id' => true,
        'fistname' => true,
        'secondname' => true,
        'lastname' => true,
        'gender' => true,
        'created' => true,
        'modified' => true,
        'createdby' => true,
        'modifiedby' => true,
        'deleted' => true,
        'user' => true,
        'relationship' => true,
    ];
}
