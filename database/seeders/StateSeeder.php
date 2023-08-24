<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    public function run(): void
    {
        $this->newState('Zurich', 'ZH');
        $this->newState('Berne', 'BE');
        $this->newState('Lucerne', 'LU');
        $this->newState('Uri', 'UR');
        $this->newState('Schwyz', 'SZ');
        $this->newState('Obwald ', 'OW');
        $this->newState('Nidwald', 'NW');
        $this->newState('Galris', 'GL');
        $this->newState('Zoug', 'ZG');
        $this->newState('Fribourg', 'FR');
        $this->newState('Soleure', 'SO');
        $this->newState('Bâle-Ville', 'BS');
        $this->newState('Bâle-Campagne', 'BL');
        $this->newState('Schaffhouse', 'SH');
        $this->newState('Appenzell Rh.-Ext', 'AR');
        $this->newState('Appenzell Rh.-Int', 'AI');
        $this->newState('Saint-Gall', 'SG');
        $this->newState('Grisons', 'GR');
        $this->newState('Argovie', 'AG');
        $this->newState('Thurgovie', 'TG');
        $this->newState('Tessin ', 'TI');
        $this->newState('Vaud', 'VD');
        $this->newState('Valais', 'VS');
        $this->newState('Neuchâtel', 'NE');
        $this->newState('Genève', 'GE');
        $this->newState('Jura', 'JU');
    }

    private function newState(string $name, string $short): void
    {
        DB::table('states')->insert([
            'name' => $name,
            'short' => $short,
        ]);
    }
}
