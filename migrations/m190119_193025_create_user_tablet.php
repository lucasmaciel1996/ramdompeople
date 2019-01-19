<?php

use yii\db\Migration;

/**
 * Class m190119_193025_create_user_tablet
 */
class m190119_193025_create_user_tablet extends Migration
{
  
  
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
      $this->createTable('user',[
      'id'=>$this->primaryKey(),
      'username' => $this->string(80)->notNull(),
      'password' => $this->string(60)->notNull(),
      'authKey' => $this->string(80)->notNull(),
      'accessToken' => $this->string(80)->notNull(),
      'create_at'=>$this->dateTime(),
      'tipo_user'=>$this->integer(),
      'ativo'=>$this->smallInteger()->defaultvalue(1)
      
      ]);
      
      $this->insert('user',[
        'username' => 'admin',
        'password' => md5('admin'),
        'authKey' => 'test100key',
        'accessToken' => '100-token'
      ]);
    }

    public function down()
    {
        $this->dropTable('user');
  
    }
    
}
