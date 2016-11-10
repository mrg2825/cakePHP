<?php
use Migrations\AbstractSeed;

/**
 * Admin seed.
 */
class AdminSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i=0; $i < 10; $i++) { 
 
        $data [] = [
        'n_empleado' => $faker->numberBetween($min = 1, $max = 10),
        'nombre'  => $faker->firstname(),
        'pasos'   => $faker->numberBetween($min = 000, $max = 200),
        'fecha' => date("Y-m-d H:i:s"),
        'create' => date("Y-m-d H:i:s"),
        'modified' => date("Y-m-d H:i:s")


        ];
    }
        $table = $this->table('registros');
        $table->insert($data)->save();
    }
}
