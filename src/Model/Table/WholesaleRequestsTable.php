<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WholesaleRequests Model
 *
 * @method \App\Model\Entity\WholesaleRequest newEmptyEntity()
 * @method \App\Model\Entity\WholesaleRequest newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\WholesaleRequest[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\WholesaleRequest get($primaryKey, $options = [])
 * @method \App\Model\Entity\WholesaleRequest findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\WholesaleRequest patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\WholesaleRequest[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\WholesaleRequest|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WholesaleRequest saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WholesaleRequest[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\WholesaleRequest[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\WholesaleRequest[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\WholesaleRequest[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class WholesaleRequestsTable extends Table
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

        $this->setTable('wholesale_requests');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('business_name')
            ->maxLength('business_name', 64)
            ->requirePresence('business_name', 'create')
            ->notEmptyString('business_name');

        $validator
            ->scalar('abn')
            ->maxLength('abn', 64)
            ->requirePresence('abn', 'create')
            ->notEmptyString('abn');

        $validator
            ->scalar('address_line_1')
            ->maxLength('address_line_1', 64)
            ->requirePresence('address_line_1', 'create')
            ->notEmptyString('address_line_1');

        $validator
            ->scalar('address_line_2')
            ->maxLength('address_line_2', 64)
            ->allowEmptyString('address_line_2');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 64)
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        $validator
            ->scalar('business_type')
            ->maxLength('business_type', 64)
            ->requirePresence('business_type', 'create')
            ->notEmptyString('business_type');

        $validator
            ->scalar('payment_method')
            ->maxLength('payment_method', 64)
            ->requirePresence('payment_method', 'create')
            ->notEmptyString('payment_method');

        $validator
            ->scalar('message')
            ->maxLength('message', 64)
            ->allowEmptyString('message');

        $validator
            ->scalar('status')
            ->maxLength('status', 64)
            ->allowEmptyString('status');

        $validator
            ->dateTime('created_at')
            ->notEmptyDateTime('created_at');

        $validator
            ->dateTime('modified_at')
            ->notEmptyDateTime('modified_at');

        return $validator;
    }
}
