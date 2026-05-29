<?php

namespace Database\Seeders;

use App\Models\Academictitle;
use App\Models\Area;
use App\Models\Company;
use App\Models\Country;
use App\Models\City;
use App\Models\Departament;
use App\Models\Graduatecompany;
use App\Models\Graduate;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder



{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // =========================================================================
        // FASE 1: CREACIÓN DE ENTIDADES INDEPENDIENTES (CATÁLOGOS)
        // =========================================================================
        
        Country::factory(10)->create();
        Company::factory(10)->create();
        Departament::factory(10)->create();
        Graduatecompany::factory(10)->create();
        City::factory(10)->create();
        
        // =========================================================================
        // FASE 2: CREACIÓN DE LA ENTIDAD DEPENDIENTE
        // =========================================================================
        
        $AcademictitleCreados = Academictitle::factory(10)->create();
        $AreaCreados = Area::factory(10)->create();
        $GraduateCreados = Graduate::factory(10)->create();
        
    

        // =========================================================================
        // FASE 3: POBLACIÓN DE LAs TABLAs PIVOTE (MUCHOS A MUCHOS)
        // =========================================================================
        
        foreach ($GraduateCreados as $Graduate) {
            
            $AreaAleatorios = $AreaCreados->random(rand(1, 3))->pluck('id');
            
            $Graduate->Area()->attach($AreaAleatorios);
        }

        foreach ($GraduateCreados as $Graduate) {
            
            $AcademictitleAleatorios = $AcademictitleCreados->random(rand(1, 3))->pluck('id');
            
            $Graduate->Academictitle()->attach($AcademictitleAleatorios);
        }
    }
}
