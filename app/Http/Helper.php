<?php

class Helper{

    public static function numbers_only($str){

        return preg_replace("/[^0-9]/", "", $str);
    }

    public static function remove_chars($string){

        $string = preg_replace("/[áàâãä]/", "a", $string);
        $string = preg_replace("/[ÁÀÂÃÄ]/", "A", $string);
        $string = preg_replace("/[éèê]/", "e", $string);
        $string = preg_replace("/[ÉÈÊ]/", "E", $string);
        $string = preg_replace("/[íì]/", "i", $string);
        $string = preg_replace("/[ÍÌ]/", "I", $string);
        $string = preg_replace("/[óòôõö]/", "o", $string);
        $string = preg_replace("/[ÓÒÔÕÖ]/", "O", $string);
        $string = preg_replace("/[úùü]/", "u", $string);
        $string = preg_replace("/[ÚÙÜ]/", "U", $string);
        $string = preg_replace("/ç/", "c", $string);
        $string = preg_replace("/Ç/", "C", $string);
        $string = preg_replace("/[][><}{)(:;,!?*%~^`&#+]/", "", $string);
        $string = preg_replace("/ /", " ", $string);

        return $string;
    }


    public static function estados(){

        $estadosBrasileiros = array(

            ' '=>'  ',
            'AC'=>'Acre',
            'AL'=>'Alagoas',
            'AP'=>'Amapá',
            'AM'=>'Amazonas',
            'BA'=>'Bahia',
            'CE'=>'Ceará',
            'DF'=>'Distrito Federal',
            'ES'=>'Espírito Santo',
            'GO'=>'Goiás',
            'MA'=>'Maranhão',
            'MT'=>'Mato Grosso',
            'MS'=>'Mato Grosso do Sul',
            'MG'=>'Minas Gerais',
            'PA'=>'Pará',
            'PB'=>'Paraíba',
            'PR'=>'Paraná',
            'PE'=>'Pernambuco',
            'PI'=>'Piauí',
            'RJ'=>'Rio de Janeiro',
            'RN'=>'Rio Grande do Norte',
            'RS'=>'Rio Grande do Sul',
            'RO'=>'Rondônia',
            'RR'=>'Roraima',
            'SC'=>'Santa Catarina',
            'SP'=>'São Paulo',
            'SE'=>'Sergipe',
            'TO'=>'Tocantins'
        );

        return $estadosBrasileiros;


    }
    public static function tipos(){

        $tipos = array(
            ' '=>'  ',
            'cafe'=>'cafe',
            'restaurante'=>'restaurante',
            'coworking'=>'coworking',
            'livraria'=>'livraria',
            'outro'=>'outro',
        );

        return $tipos;

    }
    public static function internet(){

        $internet = array(
            ' '=>'  ',
            'sim' => 'sim',
            'nao' => 'nao',
        );

        return $internet;
    }
    public static function velocidadeinternet(){

        $internet = array(
            ' '=>'  ',
            '5 mega'   => '5 mega',
            '15 mega'  => '15 mega',
            '30 mega'  => '30 mega',
            '60 mega'  => '60 mega',
            '120 mega' => '120 mega',

        );

        return $internet;
    }

    public static function internetTipo(){

        $internet = array(
            ' '=>'  ',
            'aberta' => 'aberta',
            'fechada' => 'fechada',
        );

        return $internet;
    }







}