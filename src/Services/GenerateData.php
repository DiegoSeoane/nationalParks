<?php

namespace App\Services;

class GenerateData{
    private $array = [
        [
            'nombre' => 'Picos de Europa',
            'provincia' => 'Asturias, León y Cantabria',
            'ecosistema' => 'Alta montaña atlántica',
            'fichero'=> 'picos.jpg'
        ],
        [
            'nombre' => 'Valle de Ordesa y Monte Perdido',
            'provincia' => 'Huesca',
            'ecosistema' => 'Alta montaña',
            'fichero'=> 'ordesa.jpg'
        ],
        [
            'nombre' => 'Caldera de Taburiente',
            'provincia' => 'Sta. Cruz de Tenerife',
            'ecosistema' => 'Volcánico',
            'fichero'=> 'caldera.jpg'
        ],
        [
            'nombre' => 'Teide',
            'provincia' => 'Sta. Cruz de Tenerife',
            'ecosistema' => 'Volcánico',
            'fichero'=> 'teide.jpg'
        ],
        [
            'nombre' => 'Aiguas Tortas y Lago de San Mauricio',
            'provincia' => 'Lleida',
            'ecosistema' => 'Alta montaña',
            'fichero'=> 'tortas.jpg'
        ],
        [
            'nombre' => 'Doñana',
            'provincia' => 'Huelva, Sevilla y Cádiz',
            'ecosistema' => 'Humedal',
            'fichero'=> 'donana.jpg'
        ],
        [
            'nombre' => 'Tablas de Daimiel',
            'provincia' => 'Ciudad Real',
            'ecosistema' => 'Humedal',
            'fichero'=> 'daimiel.jpg'
        ],
        [
            'nombre' => 'Cabañeros',
            'provincia' => 'Ciudad Real y Toledo',
            'ecosistema' => 'media-alta montaña mediterránea',
            'fichero'=> 'cabaneros.jpg'
        ],
        [
            'nombre' => 'Sierra Nevada',
            'provincia' => 'Granada y Almería',
            'ecosistema' => 'media-alta montaña mediterránea',
            'fichero'=> 'nevada.jpg'
        ],
        [
            'nombre' => 'Islas Atlánticas de Galicia',
            'provincia' => 'Pontevedra y La Coruña',
            'ecosistema' => 'marítimo-terrestre',
            'fichero'=> 'cies.jpg'
        ],
        [
            'nombre' => 'Monfragüe',
            'provincia' => 'Cáceres',
            'ecosistema' => 'media-alta montaña mediterránea',
            'fichero'=> 'monfrague.jpg'
        ],
        [
            'nombre' => 'Sierra de Guadarrama',
            'provincia' => 'Madrid y Segovia',
            'ecosistema' => 'Alta montaña mediterránea',
            'fichero'=> 'guadarrama.jpg'
        ]
    ];
    public function getArray(){
        return $this->array;
    }
}

?>