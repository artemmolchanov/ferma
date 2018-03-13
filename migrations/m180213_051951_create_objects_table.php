<?php

use yii\db\Migration;

/**
 * Handles the creation of table `objects`.
 */
class m180213_051951_create_objects_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('objects', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'image' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('objects');
    }
}
