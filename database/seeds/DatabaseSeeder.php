<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  public function run()
  {
    $this->call(productos::class);
    $this->call(admin::class);
  }
}
?>
