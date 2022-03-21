<?php

use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'azienda' => 'Italo',
                'stazione_di_partenza' => 'Roma Termini',
                'stazione_di_arrivo' => 'Lamezia Terme',
                'orario_di_partenza' => '14:30:00',
                'orario_di_arrivo' => '18:15:00',
                'codice_treno_numero' => 'AR7564',
                'carrozze' => '12',
                'in_orario' => true,
                'cancellato' => false
            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'Roma Tiburtina',
                'stazione_di_arrivo' => 'Padova centrale',
                'orario_di_partenza' => '06:30:00',
                'orario_di_arrivo' => '11:45:00',
                'codice_treno_numero' => 'FS5690',
                'carrozze' => '15',
                'in_orario' => true,
                'cancellato' => false
            ],
            [
                'azienda' => 'Trenitalia',
                'stazione_di_partenza' => 'Firenze Santa Maria Novella',
                'stazione_di_arrivo' => 'Bolzano Sud',
                'orario_di_partenza' => '10:30:00',
                'orario_di_arrivo' => '16:15:00',
                'codice_treno_numero' => 'IS1567',
                'carrozze' => '10',
                'in_orario' => true,
                'cancellato' => false
            ],
        ];

        foreach ($trains as $train) {
            $new_train = new Train();
            $new_train->azienda = $train['azienda'];
            $new_train->stazione_di_partenza = $train['stazione_di_partenza'];
            $new_train->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $new_train->orario_di_partenza = $train['orario_di_partenza'];
            $new_train->orario_di_arrivo = $train['orario_di_arrivo'];
            $new_train->codice_treno_numero = $train['codice_treno_numero'];
            $new_train->carrozze = $train['carrozze'];
            $new_train->in_orario = $train['in_orario'];
            $new_train->cancellato = $train['cancellato'];
            $new_train->save();
        }
    }
};
