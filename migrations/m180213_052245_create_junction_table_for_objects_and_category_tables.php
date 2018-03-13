<?php

use yii\db\Migration;

/**
 * Handles the creation of table `objects_category`.
 * Has foreign keys to the tables:
 *
 * - `objects`
 * - `category`
 */
class m180213_052245_create_junction_table_for_objects_and_category_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('objects_category', [
            'objects_id' => $this->integer(),
            'category_id' => $this->integer(),
            'PRIMARY KEY(objects_id, category_id)',
        ]);

        // creates index for column `objects_id`
        $this->createIndex(
            'idx-objects_category-objects_id',
            'objects_category',
            'objects_id'
        );

        // add foreign key for table `objects`
        $this->addForeignKey(
            'fk-objects_category-objects_id',
            'objects_category',
            'objects_id',
            'objects',
            'id',
            'CASCADE'
        );

        // creates index for column `category_id`
        $this->createIndex(
            'idx-objects_category-category_id',
            'objects_category',
            'category_id'
        );

        // add foreign key for table `category`
        $this->addForeignKey(
            'fk-objects_category-category_id',
            'objects_category',
            'category_id',
            'category',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `objects`
        $this->dropForeignKey(
            'fk-objects_category-objects_id',
            'objects_category'
        );

        // drops index for column `objects_id`
        $this->dropIndex(
            'idx-objects_category-objects_id',
            'objects_category'
        );

        // drops foreign key for table `category`
        $this->dropForeignKey(
            'fk-objects_category-category_id',
            'objects_category'
        );

        // drops index for column `category_id`
        $this->dropIndex(
            'idx-objects_category-category_id',
            'objects_category'
        );

        $this->dropTable('objects_category');
    }
}
