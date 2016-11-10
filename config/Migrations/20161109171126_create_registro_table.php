<?php

use Phinx\Migration\AbstractMigration;

class CreateRegistroTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('registros');
        $table->addColumn('n_empleado', 'integer')
        ->addColumn('nombre', 'string', array('limit' => 40))
        ->addColumn('pasos', 'integer')
        ->addColumn('fecha', 'date')
        ->addColumn('create', 'datetime')
        ->addColumn('modified', 'datetime')
        ->create();


    }
}
