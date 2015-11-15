<?php

use Illuminate\Database\Seeder;

class ExpertiseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expertises')->insert([
	        	'title' => "Dakgoot verven",
	        	'description' => 'Voordat je gaat werken aan je dakgoot moet je er zeker van zijn dat je veilig te werk gaat. Let daarvoor op de volgende tips:
Gebruik een lader van minstens 3 tot 4 meter hoog.
Verplaats je ladder regelmatig. 
Zorg ervoor dat je niet uitwijkt naar links of rechts. Zo kan je ladder gemakkelijker omslaan.
Gebruik een goede ladder.
Gebruik bij voorkeur een ladder met ver uit elkaar staande poten. Deze biedt meer steun dan ladders met poten die dicht bij elkaar staan.
Plaats de ladder niet te dicht bij de muur. Zorg ervoor dat de afstand van de muur minstens een vierde van de ladderhoogte is.
Zorg ervoor dat je je nog kunt vasthouden aan de hoogste sporten van de ladder.
Gebruik gemakkelijke schoenen met een dikke zool.',
            'user_id' => 1,
            'job_id' => 2
        ]);

        DB::table('expertises')->insert([
            'title' => 'Mortel mengen',
            'description' => 'Je kan het mengsel een persoonlijke toets geven om het helemaal af te stemmen op een bepaalde toepassing. De meest bruikbare middelen hiervoor zijn:
Kalk: extra kalk verkleint het risico op scheuren en zorgt ervoor dat je het mengsel beter kan verwerken.
Pigment: wil je een kleurtje toevoegen aan het mengsel. Dan is dit het product dat je nodig hebt.
Waterwerend middel: voor buitenpleister of voor pleisterlagen in vochtige binnenruimtes kan je een waterwerend middel aan het mengsel toevoegen.
Vorstbestendig middel: werk je tijdens de wintermaanden, dan is vorst nefast voor drogende metselspecie of beton. Door een vorstbestendig middel toe te voegen, neem je het zekere voor het onzekere.
- See more at: https://www.gamma.be/nl/beton-en-mortel-mengen#sthash.nljvzEMG.dpuf',
            'user_id' => 2,
            'job_id' => 3
        ]);

        DB::table('expertises')->insert([
            'title' => 'Nagel in hout slaan',
            'description' => 'Men neme het nageltje, en zette het op een houten voorwerp alwaar men het nageltje in wil meppen.
            Vervolgens tikt men eerst voorzichtig enkele keren niet te hard op het nageltje zodat het al een klein beetje in het hout zakt.
            Daarna kan men als een gek beginnen rammen tot de nagel in het hout zit... Let enkel wel op voor de duimen en eventuele dieren of kinderen die zicht in uw omgeving bevinden!',
            'user_id' => 2,
            'job_id' => 1
        ]);
    }
}
