<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; // Szükséges az adatbázisműveletekhez

class CreateAutosiskolaTables extends Migration
{
    public function up()
    {
        Schema::create('bejelentkezes', function (Blueprint $table) {
            $table->bigInteger('felhasznalo')->primary();
            $table->string('email', 200);
            $table->string('jelszo', 100)->unique();
            $table->timestamps();
        });

        Schema::create('jarmuvek', function (Blueprint $table) {
            $table->bigInteger('jarmuID')->primary();
            $table->string('marka', 100);
            $table->integer('evjarat');
            $table->string('valtotipus', 100);
            $table->string('uzemanyag', 100);
            $table->string('kategoria', 100);
        });

        Schema::create('befizetesek', function (Blueprint $table) {
            $table->bigInteger('befizetesID')->primary();
            $table->bigInteger('oraID');
            $table->bigInteger('vizsgaID');
            $table->bigInteger('jarmu');
            $table->integer('osszeg');
            $table->date('datum');
        });

        Schema::create('vizsga', function (Blueprint $table) {
            $table->bigInteger('vizsgaID')->primary();
            $table->date('datum');
            $table->boolean('sikeresseg');
            $table->bigInteger('vizsgazo');
            $table->bigInteger('oktato');
            $table->bigInteger('vizsgaztato');
        });

        Schema::create('orak', function (Blueprint $table) {
            $table->bigInteger('oraID')->primary();
            $table->date('datum');
            $table->integer('idotartam_perc');
            $table->bigInteger('oktato');
            $table->bigInteger('diak');
        });

        Schema::create('varosok', function (Blueprint $table) {
            $table->integer('irszam')->primary();
            $table->string('nev', 100);
        });

        Schema::create('szerepek', function (Blueprint $table) {
            $table->bigInteger('roleID')->primary();
            $table->string('szerepnev', 100);
        });

        Schema::create('felhasznalo', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('nev', 200);
            $table->integer('taj')->primary();
            $table->string('szemelyi', 8);
            $table->integer('adoszam');
            $table->date('szulido');
            $table->string('szulhely');
            $table->boolean('elsosegelyvizsga');
            $table->boolean('szemuveg');
        });


        DB::table('felhasznalo')->insert([
            'id' => 1,
            'nev' => 'admin',
            'taj' => 123456789,
            'szemelyi' => 'AA123456',
            'adoszam' => 12345678,
            'szulido' => '1980-01-01',
            'szulhely' => 'Budapest',
            'elsosegelyvizsga' => true,
            'szemuveg' => false,
        ]);

        DB::table('bejelentkezes')->insert([
            'felhasznalo' => 1,
            'email' => 'admin@admin',
            'jelszo' => bcrypt('admin'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('szerepek')->insert([
            'roleID' => 3,
            'szerepnev' => 'Admin',
        ]);

        DB::table('felhasznalo')->insert([
            'id' => 1,
            'nev' => 'Test User',
            'taj' => 123456389,
            'szemelyi' => 'AA123455',
            'adoszam' => 12145678,
            'szulido' => '1980-01-01',
            'szulhely' => 'Budapest',
            'elsosegelyvizsga' => true,
            'szemuveg' => true,
        ]);

        DB::table('bejelentkezes')->insert([
            'felhasznalo' => 2,
            'email' => 'test@test',
            'jelszo' => bcrypt('test'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('szerepek')->insert([
            'roleID' => 2,
            'szerepnev' => 'User',
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('bejelentkezes');
        Schema::dropIfExists('jarmuvek');
        Schema::dropIfExists('befizetesek');
        Schema::dropIfExists('vizsga');
        Schema::dropIfExists('orak');
        Schema::dropIfExists('varosok');
        Schema::dropIfExists('szerepek');
        Schema::dropIfExists('felhasznalo');
    }
}
