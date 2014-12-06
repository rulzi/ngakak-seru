<?php

use Phinx\Migration\AbstractMigration;

class CreateUploadTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
     */
    public function change()
    {
        $post = $this->table('post', array('id' => 'post_id'));
        $post->addColumn('user_id', 'integer')
              ->addColumn('judul', 'string', array('limit' => 255))
              ->addColumn('image', 'string', array('limit' => 255))
              ->addColumn('created', 'datetime')
              ->save();
    }
    
    /**
     * Migrate Up.
     */
    public function up()
    {
    
    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}