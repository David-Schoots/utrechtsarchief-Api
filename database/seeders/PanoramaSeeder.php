<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PanoramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $panoramas = [
                        [

        'catalog_number' => 135001,
        'page_number' => 1,
        'title' => 'Titel 1',
        'description' => 'Afbeelding van de titelpagina van het Panorama van Utrecht, op de lithostenen
getekend door J. Bos, gedrukt bij P.W. van de Weijer en in juli 1859 uitgegeven door de Wed.
Herfkens en zoon.',
        'img' => '/img/page-1.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135002,
        'page_number' => 2,
        'title' => 'Titel 2',
        'description' => 'Gezicht over de Wittevrouwenbrug in de Wittevrouwenstraat te Utrecht met het
douanekantoor (de latere politiepost Wittevrouwen) en de Willemskazerne.',
        'img' => '/img/page-2.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135003,
        'page_number' => 3,
        'title' => 'Titel 3',
        'description' => 'Gezicht op de gevangenis aan het Wolvenplein te Utrecht op het vroegere bolwerk
Wolvenburg, met rechts een huis op de afgegraven stadswal bij de Wolvenstraat.',
        'img' => '/img/page-3.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135004,
        'page_number' => 4,
        'title' => 'Titel 4',
        'description' => 'Gezicht op de uitmonding van de Plompetorengracht te Utrecht in de
stadsbuitengracht, in het midden de bomen langs de Noorderkade en rechts een gedeelte van
het Begijnebolwerk. Rechts wordt een overhaalschuitje voortgetrokken.
',
        'img' => '/img/page-4.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135005,
        'page_number' => 5,
        'title' => 'Titel 5',
        'description' => 'Gezicht op het Begijnebolwerk te Utrecht.',
        'img' => '/img/page-5.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135006,
        'page_number' => 6,
        'title' => 'Titel 6',
        'description' => 'Gezicht op een gedeelte van het Begijnebolwerk (links) en de Van Asch van
Wijckskade te Utrecht.',
        'img' => '/img/page-6.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135007,
        'page_number' => 7,
        'title' => 'Titel 7',
        'description' => 'Gezicht op de Van Asch van Wijckskade te Utrecht, de Weerdbarrière en de
Weerdbrug en rechts de Noorderkade met de stadswaag en stadskraan.',
        'img' => '/img/page-7.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135008,
        'page_number' => 8,
        'title' => 'Titel 8',
        'description' => 'Gezicht op de Noorderkade te Utrecht, de Koninklijke Fabriek van
Landbouwkundige Werktuigen, bierbrouwerij De Krans en het Paardenveld met de molen De Rijn
en Zon',
        'img' => '/img/page-8.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135009,
        'page_number' => 9,
        'title' => 'Titel 9',
        'description' => 'Gezicht op het Paardenveld te Utrecht met de molen De Meiboom en rechts een
was- en badhuis, de latere Wasch- en Badinrichting van W. de Rijk.',
        'img' => '/img/page-9.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [

        'catalog_number' => 135010,
        'page_number' => 10,
        'title' => 'Titel 10',
        'description' => ' Gezicht over de Catharijnebrug te Utrecht op een groot appartementengebouw, het
douanekantoortje (de Catharijnebarrière), een herenhuis (later Bierhuis De Hoop) en de
gasfabriek van W.H. de Heus op en bij het noordwestelijke bastion van het vroegere kasteel
Vredenburg.',
        'img' => '/img/page-10.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [

        'catalog_number' => 135011,
        'page_number' => 11,
        'title' => 'Titel 11',
        'description' => 'Gezicht op de koperpletterij van W.H. de Heus met het zuidwestelijke bastion van
het vroegere kasteel Vredenburg en rechts de Rijnkade te Utrecht.',
        'img' => '/img/page-11.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [

        'catalog_number' => 135012,
        'page_number' => 12,
        'title' => 'Titel 12',
        'description' => ' Gezicht over de Willemsbrug op de Rijnkade te Utrecht, het hek met de
douanekantoortjes aan weerszijden van de brug (de Willemsbarrière) en rechts van de brug het
begin van het in Engelse landschapsstijl aangelegde singelplantsoen.
',
        'img' => '/img/page-12.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [

        'catalog_number' => 135013,
        'page_number' => 13,
        'title' => 'Titel 13',
        'description' => ' Gezicht op het in Engelse landschapsstijl aangelegde singelplantsoen te Utrecht
met het theehuis van de oud-rooms-katholieke aartsbisschop en rechts het hospitaal van het
Duitse Huis. Het kruis boven het langgerekte rode dak is van de Dominicuskerk op de
Mariaplaats.',
        'img' => '/img/page-13.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [

        'catalog_number' => 135014,
        'page_number' => 14,
        'title' => 'Titel 14',
        'description' => 'Gezicht op het in Engelse landschapsstijl aangelegde singelplantsoen te Utrecht
ter hoogte van de Zeven Steegjes. De opzet van het plan Zocher was om de minder
aantrekkelijke delen van de stad te camoufleren. Dat doet hij hier door middel van een
plantsoen.',
        'img' => '/img/page-14.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [

        'catalog_number' => 135015,
        'page_number' => 15,
        'title' => 'Titel 15',
        'description' => 'Gezicht op het singelplantsoen te Utrecht met het Bartholomeusgasthuis',
        'img' => '/img/page-15.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [

        'catalog_number' => 135016,
        'page_number' => 16,
        'title' => 'Titel 16',
        'description' => 'Gezicht op het singelplantsoen te Utrecht met links de Geertekerk en in de
stadsbuitengracht een houtvlot.',
        'img' => '/img/page-16.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [

        'catalog_number' => 135017,
        'page_number' => 17,
        'title' => 'Titel 17',
        'description' => 'Gezicht op het singelplantsoen te Utrecht met half achter de bomen het
Diakonessenhuis aan de Springweg en rechts een gedeelte van het vroegere bastion Sterrenburg
met daarachter de molen op de Bijlhouwerstoren en in de stadsbuitengracht een houtvlot.',
        'img' => '/img/page-17.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [

        'catalog_number' => 135018,
        'page_number' => 18,
        'title' => 'Titel 18',
        'description' => 'Gezicht op het singelplantsoen te Utrecht met het dubbele woonhuis boven de
kazematten van het vroegere bastion Sterrenburg en de molen op de Bijlhouwerstoren.',
        'img' => '/img/page-18.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [

        'catalog_number' => 135019,
        'page_number' => 19,
        'title' => 'Titel 19',
        'description' => 'Gezicht over de Tolsteegbrug te Utrecht op de hekpalen van de Tolsteegbarrière bij
het Ledig Erf met daaronder de uitmonding van de Oudegracht in de stadsbuitengracht en rechts
het in het singelplantsoen opgenomen vroegere bastion Manenburg.',
        'img' => '/img/page-19.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135020,
        'page_number' => 20,
        'title' => 'Titel 20',
        'description' => 'Gezicht op het singelplantsoen te Utrecht met de zuidwestelijke toren van de
Nicolaikerk en de cavaleriestallen met daarachter een gebouw van het voormalige St.-
Agnietenklooster. Tegenwoordig ziet hier het Centraal Museum.',
        'img' => '/img/page-20.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135021,
        'page_number' => 21,
        'title' => 'Titel 21',
        'description' => 'Gezicht op het singelplantsoen te Utrecht met het gebouw van de Fundatie van de
Vrijvrouwe van Renswoude en rechts de kameren van Maria van Pallaes aan de Agnietenstraat.',
        'img' => '/img/page-21.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135022,
        'page_number' => 22,
        'title' => 'Titel 22',
        'description' => ' Gezicht op het singelplantsoen te Utrecht met geheel links de regentenkamer van
de kameren van Maria van Pallaes en daarnaast de Nieuwegracht Onder de Linden en de
uitmonding van de Nieuwegracht in de stadsbuitengracht en rechts de rode daken van gebouwen van de voormalige St.-Servaasabdij',
        'img' => '/img/page-22.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135023,
        'page_number' => 23,
        'title' => 'Titel 23',
        'description' => 'Gezicht op het singelplantsoen rond het voormalige bastion Zonnenburg te Utrecht
met links op de achtergrond een van de gebouwen van de voormalige St.-Servaasabdij, in het
midden het Meteorologisch Instituut en rechts de Sterrenwacht.',
        'img' => '/img/page-23.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135024,
        'page_number' => 24,
        'title' => 'Titel 24',
        'description' => 'Gezicht op het singelplantsoen bij het Servaasbolwerkte Utrecht met rechts op de
achtergrond een gedeelte van het St.-Magdalenaklooster.',
        'img' => '/img/page-24.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135025,
        'page_number' => 25,
        'title' => 'Titel 25',
        'description' => ' Gezicht op het singelplantsoen bij het Servaasbolwerk te Utrecht met het gebouw
van het voormalige Leeuwenberchgasthuis, destijds in gebruik als chemisch laboratorium, en op
de achtergrond de daken van de bisschoppelijke stallen op het Servaasbolwerk.',
        'img' => '/img/page-25.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135026,
        'page_number' => 26,
        'title' => 'Titel 26',
        'description' => 'Gezicht over de Maliebrug met het dubbele hek en het douanekantoortje (de
Maliebarrière) te Utrecht op het singelplantsoen met geheel links een gedeelte van de
Bruntenhof en rechts een gedeelte van het bolwerk Lepelenburg.',
        'img' => '/img/page-26.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135027,
        'page_number' => 27,
        'title' => 'Titel 27',
        'description' => 'Gezicht op het voormalige bolwerk Lepelenburg te Utrecht met links het huis
Lievendaal en rechts enkele particuliere tuinhuizen.',
        'img' => '/img/page-27.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135028,
        'page_number' => 28,
        'title' => 'Titel 28',
        'description' => ' Gezicht op het voormalige bolwerk Lepelenburg te Utrecht met een aantal
particuliere tuinen en tuinhuizen.
',
        'img' => '/img/page-28.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135029,
        'page_number' => 29,
        'title' => 'Titel 29',
        'description' => 'Gezicht op het singelplantsoen te Utrecht ten noorden van het voormalige bolwerk
Lepelenburg, waarop het witte huis links staat, met in het midden de huizen aan het begin van
de Herenstraat en rechtsachter enkele van de kameren van Jan van der Meer aan het
Hieronymusplantsoen',
        'img' => '/img/page-29.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135030,
        'page_number' => 30,
        'title' => 'Titel 30',
        'description' => 'Gezicht op het singelplantsoen te Utrecht ter hoogte van de bocht van de Kromme
Nieuwegracht (links op de achtergrond) met de huizen aan het Hieronymusplantsoen en
daarachter de voormalige St.-Hieronymuskapel en rechts twee boogjes, de restanten van de
oude stadsmuur',
        'img' => '/img/page-30.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135031,
        'page_number' => 31,
        'title' => 'Titel 31',
        'description' => ' Gezicht op het singelplantsoen te Utrecht met links de Zonstraat (later gewijzigd in
Nobelstraat) die aansluit op de Lucasbrug, op de voorgrond, met rechts daarvan het
Lucasbolwerk met het Suikerhuis.
',
        'img' => '/img/page-31.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135032,
        'page_number' => 32,
        'title' => 'Titel 32',
        'description' => 'Gezicht op het singelplantsoen te Utrecht met links de noordelijke punt van het
Lucasbolwerk met de directeurswoning van het Suikerhuis. Het Suikerhuis was een
suikerraffinaderij die in 1721 werd begonnen. In 1860 werd deze afgebroken.
',
        'img' => '/img/page-32.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
    [
        'catalog_number' => 135033,
        'page_number' => 33,
        'title' => 'Titel 33',
        'description' => 'Gezicht op het singelplantsoen te Utrecht ten noorden van het Lucasbolwerk.
Uiterst rechts sluit het plantsoen aan bij de Wittevrouwenbrug waarmee het panorama begint.
Hier eindigt de tekenaar zijn rondje langs de singel.',
        'img' => '/img/page-33.jpg',
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ],
        ];

        foreach ($panoramas as $panorama) {
            $panorama['created_at'] = Carbon::now();
            $panorama['updated_at'] = Carbon::now();
            DB::table('panoramas')->insert($panorama);
        }
    }
}