<?php

class m141025_184526_initial_DB_create extends CDbMigration
{
	protected $MySqlOptions = 'ENGINE=InnoDB DEFAULT CHARSET=utf8';

	public function up()
	{
		$this->createTable('tbl_articles', array(
            "id" => "pk",
            "title" => "varchar(255) NOT NULL DEFAULT ''",
            "category_id" => "int(11) NOT NULL DEFAULT 1",
            "content" => "text NOT NULL",
            "posted_date" => "timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP",
            "status" => "tinyint(1) NOT NULL DEFAULT 0",
            "comment_status" => "tinyint(1) NOT NULL DEFAULT 1",
        ), $this->MySqlOptions);

		$this->createTable('tbl_articles_category', array(
            "id" => "pk",
            "title" => "varchar(255) NOT NULL DEFAULT ''",
            "parent_id" => "int(11) NOT NULL DEFAULT 1",
            "status" => "tinyint(1) NOT NULL DEFAULT 0",
        ), $this->MySqlOptions);

		$this->createTable('tbl_product', array(
            "id" => "pk",
            "title" => "varchar(255) NOT NULL DEFAULT ''",
            "category_id" => "int(11) NOT NULL",
            "calories" => "int(11) NOT NULL",
            "measure" => "varchar(40) NOT NULL DEFAULT ''",
        ), $this->MySqlOptions);

		$this->createTable('tbl_product_category', array(
            "id" => "pk",
            "title" => "varchar(255) NOT NULL DEFAULT ''",
            "parent_id" => "int(11) NOT NULL",
        ), $this->MySqlOptions);

		$this->createTable('tbl_recipe', array(
            "id" => "pk",
            "title" => "varchar(255) NOT NULL DEFAULT ''",
            "category_id" => "int(11) unsigned NOT NULL DEFAULT 1",
            "description" => "tinytext",
            "ingridients" => "tinytext NOT NULL",
            "cooking_instructions" => "text NOT NULL",
            "calories" => "int(11) unsigned DEFAULT NULL",
            "num_of_persons" => "tinyint(50) unsigned DEFAULT NULL",
            "posted_date" => "timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP",
            "comment_status" => "tinyint(1) NOT NULL DEFAULT 1",
            "status" => "tinyint(1) NOT NULL DEFAULT 0",
        ), $this->MySqlOptions);

		$this->createTable('tbl_recipe_category', array(
            "id" => "pk",
            "title" => "varchar(255) NOT NULL DEFAULT ''",
            "parent_id" => "int(11) unsigned NOT NULL",
            "position" => "varchar(60) NOT NULL DEFAULT ''",            
        ), $this->MySqlOptions);

		$this->createTable('tbl_recipe_ingridient', array(
            "id" => "pk",
            "recipe_id" => "int(11) NOT NULL",
            "product_id" => "int(11) NOT NULL",
            "quantity" => "double DEFAULT NULL",
            "calorie" => "int(11) NOT NULL",
        ), $this->MySqlOptions);

		$this->createTable('tbl_setting', array(
            "id" => "pk",
            "defaultStatusComment" => "tinyint(1) unsigned NOT NULL DEFAULT 1",
            "posts_per_page" => "tinyint(100) unsigned NOT NULL",           
        ), $this->MySqlOptions);

	}

	public function down()
	{
		$this->dropTable('tbl_articles');
		$this->dropTable('tbl_articles_category');
		$this->dropTable('tbl_product');
		$this->dropTable('tbl_product_category');
		$this->dropTable('tbl_recipe');
		$this->dropTable('tbl_recipe_category');
		$this->dropTable('tbl_recipe_ingridient');
		$this->dropTable('tbl_setting');
	}

	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->up();
	}

	public function safeDown()
	{
		$this->down();
	}

}