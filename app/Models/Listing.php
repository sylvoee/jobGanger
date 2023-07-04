<?php
namespace App\Models;

class Listing{
    public static function all(){

        return [
            [
                'id' => 1 ,
            'title' => 'james Muller title .....................  ', 
            'description' => ' This is the best job posing ok '
            ],
    
            [
                'id' => 2 ,
                'title' => 'This how it happens ok', 
                'description' => 'benson@power'
             ] ,
             [
                'id' => 3 ,
                'title' => 'This title three ok', 
                'description' => 'Description three will go on here ok'
             ] ,

             [
                'id' => 4,
                'title' => 'This title three ok', 
                'description' => 'Description three will go on here ok'
             ] ,
             [
                'id' => 5 ,
                'title' => 'This title three ok', 
                'description' => 'Description three will go on here ok'
             ] ,

             [
                'id' => 6 ,
                'title' => 'This title three ok', 
                'description' => 'Description three will go on here ok'
             ] 
        ] ;

    }

     // Listing details
    public static function find($id){
       $Listings = self::all();
       foreach($Listings as $aList){
        if($aList['id'] == $id ){
            return $aList ;

        }


       }
    }
}




?>