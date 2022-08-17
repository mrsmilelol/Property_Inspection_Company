<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Products Model
 *
 * @property \App\Model\Table\OrderItemsTable&\Cake\ORM\Association\HasMany $OrderItems
 * @property \App\Model\Table\ProductCategoriesTable&\Cake\ORM\Association\HasMany $ProductCategories
 * @property \App\Model\Table\ProductImagesTable&\Cake\ORM\Association\HasMany $ProductImages
 * @property \App\Model\Table\ProductReviewsTable&\Cake\ORM\Association\HasMany $ProductReviews
 * @property \App\Model\Table\ShoppingSessionsTable&\Cake\ORM\Association\HasMany $ShoppingSessions
 *
 * @method \App\Model\Entity\Product newEmptyEntity()
 * @method \App\Model\Entity\Product newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Product[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Product get($primaryKey, $options = [])
 * @method \App\Model\Entity\Product findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Product patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Product[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Product|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Product[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ProductsTable extends Table
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

        $this->setTable('products');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('OrderItems', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('ProductCategories', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('ProductImages', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('ProductReviews', [
            'foreignKey' => 'product_id',
        ]);
        $this->hasMany('ShoppingSessions', [
            'foreignKey' => 'product_id',
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
            ->scalar('name')
            ->maxLength('name', 32)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('description')
            ->maxLength('description', 64)
            ->allowEmptyString('description');

        $validator
            ->integer('price')
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        $validator
            ->scalar('material')
            ->maxLength('material', 16)
            ->requirePresence('material', 'create')
            ->notEmptyString('material');

        $validator
            ->scalar('brand')
            ->maxLength('brand', 16)
            ->requirePresence('brand', 'create')
            ->notEmptyString('brand');

        $validator
            ->scalar('style')
            ->maxLength('style', 16)
            ->requirePresence('style', 'create')
            ->notEmptyString('style');

        $validator
            ->scalar('colour')
            ->maxLength('colour', 16)
            ->requirePresence('colour', 'create')
            ->notEmptyString('colour');

        $validator
            ->integer('units_in_stock')
            ->requirePresence('units_in_stock', 'create')
            ->notEmptyString('units_in_stock');

        $validator
            ->scalar('size')
            ->maxLength('size', 16)
            ->requirePresence('size', 'create')
            ->notEmptyString('size');

        $validator
            ->integer('weight')
            ->requirePresence('weight', 'create')
            ->notEmptyString('weight');

        $validator
            ->scalar('finish')
            ->maxLength('finish', 16)
            ->allowEmptyString('finish');

        $validator
            ->integer('wholesale_price')
            ->allowEmptyString('wholesale_price');

        $validator
            ->integer('sale_price')
            ->allowEmptyString('sale_price');

        $validator
            ->scalar('manufacturing')
            ->maxLength('manufacturing', 32)
            ->allowEmptyString('manufacturing');

        $validator
            ->dateTime('created_at')
            ->notEmptyDateTime('created_at');

        $validator
            ->dateTime('modified_at')
            ->notEmptyDateTime('modified_at');

        return $validator;
    }
}
