<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['category_name', 'category_description', 'publication_status'];

    public static function saveCategoryInfo($request){
        // ***** Data insert *****

        // ## This way is query builder ##
        // DB::table('categories')->insert([
        //     'category_name' => $request->category_name,
        //     'category_description' => $request->category_description,
        //     'publication_status' => $request->publication_status
        // ]);
        // return 'Success';

        // ## Eloquent way : 1 ##
        // $category = new Category();
        // $category -> category_name = $request->category_name;
        // $category -> category_description = $request->category_description;
        // $category -> publication_status = $request->publication_status;
        // $category->save();

         // ## Eloquent way : 2 ##
         Category :: create($request->all());

    }
}
