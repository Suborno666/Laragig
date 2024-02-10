<?php
 namespace App\Models;
 
 class Listing{
    public static function all(){
        return [
            [
                'id'=>1,
                'title'=>'Listing One',
                'description'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores molestias a quibusdam consequatur! Minus eos hic
                voluptatem, repudiandae aut aliquam deleniti veniam harum officiis aperiam alias voluptate temporibus tenetur rem."
            ],
            [
                'id'=>2,
                'title'=>'Listing Two',
                'description'=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores molestias a quibusdam consequatur! Minus eos hic
                voluptatem, repudiandae aut aliquam deleniti veniam harum officiis aperiam alias voluptate temporibus tenetur rem."
            ]
        ];
    }

    public static function find($id){
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
 }