<?php

use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso=factory(App\Models\Curso::class,5)
        ->create()
        ->each(function($curso){   
         $clase=factory(App\Models\Clase::class)->make(); 
          $curso->clases()->save($clase);
          $clase->actividades()->save(factory(App\Models\Actividad::class)->make());
  
        });
    }
}
