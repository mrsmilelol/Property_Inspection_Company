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
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\ProductInventoriesTable&\Cake\ORM\Association\BelongsTo $ProductInventories
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

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
        ]);
        $this->belongsTo('ProductInventories', [
            'foreignKey' => 'inventory_id',
        ]);
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
            ->integer('category_id')
            ->allowEmptyString('category_id');

        $validator
            ->integer('inventory_id')
            ->allowEmptyString('inventory_id');

        $validator
            ->scalar('name')
            ->maxLength('name', 64)
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
            ->maxLength('material', 64)
            ->requirePresence('material', 'create')
            ->notEmptyString('material');

        $validator
            ->scalar('brand')
            ->maxLength('brand', 64)
            ->requirePresence('brand', 'create')
            ->notEmptyString('brand');

        $validator
            ->scalar('style')
            ->maxLength('style', 64)
            ->requirePresence('style', 'create')
            ->notEmptyString('style');

        $validator
            ->scalar('colour')
            ->maxLength('colour', 64)
            ->requirePresence('colour', 'create')
            ->notEmptyString('colour');

        $validator
            ->dateTime('created_at')
            ->allowEmptyDateTime('created_at');

        $validator
            ->dateTime('modified_at')
            ->allowEmptyDateTime('modified_at');

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
        $rules->add($rules->existsIn('category_id', 'Categories'), ['errorField' => 'category_id']);
        $rules->add($rules->existsIn('inventory_id', 'ProductInventories'), ['errorField' => 'inventory_id']);

        return $rules;
    }
}
