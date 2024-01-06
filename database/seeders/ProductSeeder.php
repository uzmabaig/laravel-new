<?php

namespace Database\Seeders;

use App\Models\product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  //       $product = collect(
  //         [
  //         [
  //             'name' => 'soap',
  //             'price' => 700
  //         ],
  //         [
  //           'name' => 'liquidsoap',
  //           'price' => 500
  //       ],
  //     ]
  //   );

  // $product->each(function($value){
  //      product::insert($value);
  // });



       Product::create([
         'name'=>'washing powder',
         'price'=>200
       ]);

       $json = File::get(path:('database/json/products.json'));
       $products = collect(json_decode($json));
       $products->each(function($value){
        Product::create([
          'name'=>$value->name,
          'price'=>$value->price
        ]);


       });


    }
}
