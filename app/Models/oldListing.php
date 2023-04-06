<?php
namespace App\Models;


class Listing {
    public static function all(){
        return [
            ['id'=>'10',
            'title' => 'Listing One',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley'              
            ],

            ['id'=>'20',
            'title' => 'Listing Two',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley'              
            ]   
        ];
    }

    public static function find($id){
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id']== $id){
                return $listing;
            }
        }
    }

}