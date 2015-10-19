<?php

use yii\db\Migration;

class m151019_150757_init_tasks_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%tasks}}', [
            'id'=>$this->primaryKey(),
            'created_at'=>$this->bigInteger(),
            'updated_at'=>$this->bigInteger(),
            'user_id'=>$this->integer(),
            'description'=>$this->text(),
            'status'=>$this->integer(),
            'closed_at'=>$this->bigInteger(),
            'estimate'=>$this->string()
        ]);
    }

    public function down()
    {
        $this->delete('{{%tasks}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
