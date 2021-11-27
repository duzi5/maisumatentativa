<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Database\Factories\SiteContatoFactory;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SiteContato::factory(100)->create();


        // $contato = new SiteContato();
        // $contato->nome='Joao';
        // $contato->telefone='445447854';
        // $contato->email='joa@gmail.com';
        // $contato->motivo_contato='2';
        // $contato->mensagem='asdfhuasudfhuahsdf udsfhauhdfu hdsuafh uashdf ufhd uashfd ';
        // $contato->save();
    }
}
