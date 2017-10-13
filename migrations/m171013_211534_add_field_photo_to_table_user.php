<?php

use yii\db\Migration;

class m171013_211534_add_field_photo_to_table_user extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->addColumn("user","photo",$this->string());
    }

    public function down()
    {
        $this->dropColumn("user","photo");
    }
}
