<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Registros Model
 *
 * @method \App\Model\Entity\Registro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Registro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Registro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Registro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Registro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Registro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Registro findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RegistrosTable extends Table
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

        $this->table('registros');
        $this->displayField('id_registro');
        $this->primaryKey('id_registro');

        $this->addBehavior('Timestamp');
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
            ->allowEmpty('id', 'create');

        $validator
            ->integer('n_empleado')
            ->requirePresence('n_empleado', 'create')
            ->notEmpty('n_empleado');

        $validator
            ->requirePresence('nombre', 'create')
            ->notEmpty('nombre');

        $validator
            ->integer('pasos')
            ->requirePresence('pasos', 'create')
            ->notEmpty('pasos');

        $validator
            ->date('fecha')
            ->requirePresence('fecha', 'create')
            ->notEmpty('fecha');

        $validator
            ->dateTime('create')
            ->requirePresence('create', 'create')
            ->notEmpty('create');

        return $validator;
    }
}
