<?php

class m220626_103241_windows extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('windows', array(
            'id' => 'pk',
            'title' => 'string NOT NULL',
            'content' => 'text',
			'gauge' => 'int',
			'request' => 'int',
        ));
		$this->insert('windows', array(
            'id' => '1',
            'title' => 'Window title',
            'content' => 'Window content',
			'gauge' => '1',
            'request' => '0',
        ));
		$this->insert('windows', array(
            'id' => '2',
            'title' => 'Window title',
            'content' => 'Window content',
			'gauge' => '1',
            'request' => '0'
        ));
		$this->insert('windows', array(
            'id' => '3',
            'title' => 'Window title',
            'content' => 'Window content',
			'gauge' => '1',
            'request' => '0'
        ));
	}

	public function safeDown()
	{
		$this->dropTable('windows');
	}

}