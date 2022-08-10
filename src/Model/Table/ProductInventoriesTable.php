<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductInventories Model
 *
 * @method \App\Model\Entity\ProductInventory newEmptyEntity()
 * @method \App\Model\Entity\ProductInventory newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ProductInventory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductInventory get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductInventory findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ProductInventory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductInventory[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductInventory|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductInventory saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductInventory[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductInventory[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductInventory[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ProductInventory[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductInventoriesTable extends Table
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

        $this->setTable('product_inventories');
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
            ->scalar('product_name')
            ->maxLength('product_name', 64)
            ->requirePresence('product_name', 'create')
            ->notEmptyString('product_name');

        $validator
            ->integer('product_quantity')
            ->requirePresence('product_quantity', 'create')
            ->notEmptyString('product_quantity');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->dateTime('modified_at')
            ->allowEmptyDateTime('modified_at');

        return $validator;
    }
}
