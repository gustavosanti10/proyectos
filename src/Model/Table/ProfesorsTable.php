<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profesors Model
 *
 * @property \App\Model\Table\MateriasTable&\Cake\ORM\Association\BelongsTo $Materias
 *
 * @method \App\Model\Entity\Profesor get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profesor newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Profesor[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profesor|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profesor saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profesor patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profesor[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profesor findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProfesorsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('profesors');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Materias', [
            'foreignKey' => 'materia_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('ci')
            ->maxLength('ci', 10)
            ->requirePresence('ci', 'create')
            ->notEmptyString('ci');

        $validator
            ->scalar('nombres')
            ->maxLength('nombres', 100)
            ->requirePresence('nombres', 'create')
            ->notEmptyString('nombres');

        $validator
            ->scalar('contrato')
            ->maxLength('contrato', 50)
            ->requirePresence('contrato', 'create')
            ->notEmptyString('contrato');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['materia_id'], 'Materias'));

        return $rules;
    }
}
