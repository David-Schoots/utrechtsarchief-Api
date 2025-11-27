<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class AdditionalInformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $additionalinformations = [
            ['title' => "", 'panorama_id' => 1, 'description' => "Het Panorama van Utrecht bestaat uit vier aaneengeplakte, zigzag gevouwen bladen
            met een totale lengte van 5,82 meter. Het panorama is een meterslange tekening van een
            rondwandeling om het centrum van Utrecht, met steeds wisselend uitzicht vanaf de singels. Het
            geeft een heel precies beeld van hoe de stad in 1859 er uitzag en het leuke is dat je ook het
            verloop van de seizoenen in de tekening terugziet.", 'img' => " ", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 2, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 3, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 4, 'description' => " Afbeelding van het overhaalschuitje over de Stadsbuitengracht ter
            hoogte van de Lange Smeestraat te Utrecht. Deze veerbootjes, die voetgangers van en naar de
            binnenstad vervoerden, werden in de loop van de 19e eeuw vervangen door vaste bruggen.", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],   
            ['title' => "", 'panorama_id' => 5, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 6, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 7, 'description' => "alleen informatietekstje bij de stadskraan (helemaal rechts op afb.): Met
            behulp van de stadskraan konden zware goederen, zoals wijntonnen, in en uit schepen geladen
            worden. Het water is van oudsher een belangrijke transportroute in Utrecht. ", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 8, 'description' => "Gezicht op de stoombierbrouwerij De Krans (Nieuwekade 30) te
            Utrecht. Vanaf de middeleeuwen werd er in Utrecht volop bier gebrouwen. Tot ver in de 19e eeuw
            werd hier grachtenwater voor gebruikt. In de twintigste eeuw verloren de Utrechtse brouwerijen
            de concurrentiestrijd met die uit Amsterdam en verdwenen de brouwerijen in de stad.", 'img' => "/img/page-8-1.jpg", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 9, 'description' => "geen afbeelding, alleen informatietekstje bij het badhuis: Badhuizen werden sinds eind 19e
            eeuw gebouwd, toen er een grotere aandacht kwam voor hygiëne, gezondheid en levensstijl. De
            vraag naar hygiënische baden nam toe door industrialisatie en verstedelijking, wat leidde tot de
            bouw van openbare badhuizen, waar tegen betaling een bad of douche kon worden genomen.
            ", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 10, 'description' => "Gezicht op de stadsbuitengracht en de Catharijnebrug te Utrecht, uit
            het zuidwesten, met op de achtergrond een gebouw waarin meerdere woonhuizen zijn
            gecombineerd aan de latere Catharijnekade. Omstreeks 1859.", 'img' => "/img/page-10-1.jpg", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 10, 'description' => "Gezicht op de Stadsbuitengracht en de Catharijnebrug te Utrecht, uit
            het noordwesten, met links het commiezenhuisje, daarachter de schoorsteen van de gasfabriek
            van W.H. de Heus op het Vredenburg en in het midden een herenhuis (later bierhuis De Hoop).
            Omstreeks 1859.", 'img' => "/img/page-10-2.jpg", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 10, 'description' => "Gezicht op de gasfabriek van W.H. de Heus op het Vredenburg te
            Utrecht, met daarbij de Nieuwejaars Heil- en Zegenwensch van de gaslantaarnopstekers bij de
            aanvang van het jaar 1857", 'img' => "/img/page-10-3.jpg", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 10, 'description' => "Gezicht vanaf de Catharijnebrug op de stadsbuitengracht te Utrecht, uit
            het noordwesten, met links de gasfabriek van W.H. de Heus aan het Vredenburg. De steenmassa
            is het noordwestelijke bastion van het vroegere kasteel Vredenburg. Foto uit omstreeks 1859", 'img' => "/img/page-10-4.jpg", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 11, 'description' => "Plattegrond van het gebouwencomplex van de koperpletterij en
            gasfabriek van W.H. de Heus, gelegen tussen de Stadsbuitengracht en het Vredenburg te
            Utrecht; met vermelding van de bestemming van de gebouwen.
            Met legenda en een aantal doorhalingen en notities.", 'img' => "/img/page-11-1.jpg", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 12, 'description' => "Gezicht over de Willemsbrug op de Rijnkade te Utrecht, het hek met de
            douanekantoortjes aan weerszijden van de brug (de Willemsbarrière) en rechts van de brug het
            begin van het in Engelse landschapsstijl aangelegde singelplantsoen.", 'img' => "/img/page-12-1.jpg", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 12, 'description' => "Gezicht vanaf de Catharijnesingel over de stadsbuitengracht te Utrecht
            met de Willemsbrug en enkele herenhuizen aan de Rijnkade en het Willemsplantsoen, uit het
            zuiden. Omstreeks 1850", 'img' => "/img/page-12-2.jpg", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 12, 'description' => "Gezicht vanaf de Catharijnesingel te Utrecht over de Willemsbrug met
            de beide commiezenhuisjes uit het zuidwesten, met links het hoekhuis aan de Rijnkade, rechts
            een herenhuis in het Willemsplantsoen en op de achtergrond de Mariaplaats en de Buur- en
            Domtoren. Omstreeks 1850", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 13, 'description' => "Gezicht op de Mariaplaats te Utrecht uit het westen, met in het midden
            op de achtergrond de Zadelstraat en de Domtoren. Op de foto zie je ook een waterpomp. De
            pomp werd in 1844 op de Mariaplaats geplaatst en leverde schoon water, zelfs tijdens de
            cholera-uitbraken in de jaren 1870.", 'img' => "/img/page-13-1.jpg", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 14, 'description' => "Plattegrond van de stad Utrecht met directe omgeving; met weergave
            van het stratenplan (deels met straatnamen), wegen en watergangen en aanduiding van de
            belangrijke gebouwen. Met weergave van alle groenvoorzieningen, waaronder de plantsoenen,
            door Zocher aangelegd op de geslechte wallen en bolwerken, aangeduid als Nieuwe
            wandeling. Met lijst van belangrijke gebouwen en overige objecten. Datering rond 1858", 'img' => "/img/page-14-1.jpg", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 15, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 16, 'description' => "geen afbeelding, alleen informatietekstje bij het grote houtvlot: De stadsbuitengracht (Singel)
            had de taak als doorgaande scheepsroute overgenomen van de Oudegracht. Dit houtvlot
            bestaat uit aan elkaar gebonden rijen boomstammen. Zo’n transport was vaak dagenlang
            onderweg naar zijn eindbestemming, dikwijls Amsterdam. ", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 17, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 18, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 19, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 20, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 21, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 22, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 23, 'description' => " Gezicht over de stadsbuitengracht te Utrecht op het Meteorologisch
            Instituut op het voormalige bastion Zonnenburg. Foto omstreeks 1859.", 'img' => "/img/page-23-1.jpg", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 23, 'description' => "Gezicht over de stadsbuitengracht te Utrecht op de Sterrenwacht
            (Astronomisch Observatorium) op het voormalige bastion Zonnenburg. Foto omstreeks 1859.", 'img' => "/img/page-23-2.jpg", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 24, 'description' => "Plattegrond van een niet gevoerd ontwerp van Zocher voor eenplantsoen op het bastion Lepelenburg te Utrecht.", 'img' => "/img/page-24-1.jpg", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 25, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 26, 'description' => " Gezicht op de Maliebrug over de Stadsbuitengracht te Utrecht, uit het
            noordoosten.", 'img' => "/img/page-26-1.jpg", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 27, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 28, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 29, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 30, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 31, 'description' => " De Lucasbrug werd ook wel ‘knuppelbrug’ genoemd. De brug is
            opgebouwd uit schijnbaar willekeurig geplaatste ruwe boomstammetjes. ", 'img' => "/img/page-31-1.jpg", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 32, 'description' => "Gezicht op het Lucasbolwerk met het Suikerhuis te Utrecht, vóór de
            afbraak, uit het noorden.", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
            ['title' => "", 'panorama_id' => 33, 'description' => "", 'img' => "", 'cordinate_x' => 0.03, 'cordinate_y' => -0.56],
        ];

        foreach ($additionalinformations as $additionalinformation) {
            DB::table('additionalinformations')->insert($additionalinformation);
        }
    }
}