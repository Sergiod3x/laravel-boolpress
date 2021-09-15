<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker; //stringa fondamentale da includere

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * 
     */

    public function run(Faker $faker)  // in maniera del tutto automatica, Laravel andrà a soddisfare questa dipendenza.
    {

        for ($i = 0; $i < 50; $i++){

            $bookObject = new Post();
            $bookObject->text = $faker->paragraph(2);
            $bookObject->save();
        }

    // public function run()
    // {
    //     $posts=[
    //         [
    //             'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium rem omnis repellat sed culpa velit reiciendis non quae beatae recusandae saepe fugit, officia vel similique. Sit quisquam deleniti earum magni.',
    //         ],
    //         [
    //             'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium rem omnis repellat sed culpa velit reiciendis non quae beatae recusandae saepe fugit, officia vel similique. Sit quisquam deleniti earum magni.',
    //         ],
    //         [
    //             'text'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium rem omnis repellat sed culpa velit reiciendis non quae beatae recusandae saepe fugit, officia vel similique. Sit quisquam deleniti earum magni.',
    //         ],
    //     ];
    //     foreach($posts as $post) {
    //         $postObject=new Post();
    //         $postObject->text=$post['text'];
    //         $postObject->save();
    //     }
    }
}

