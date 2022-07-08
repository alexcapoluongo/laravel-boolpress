<?php

use Illuminate\Database\Seeder;
use illuminate\Support\Str;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'inspiration',
            'happiness',
            'love',
            'friendship',
            'habits'
        ];

        foreach ($tags as $tag) {
            $new_tag = new Tag();
            $new_tag->name = $tag;
            $new_tag->slug = Str::slug($tag);

            $new_tag->save();
        }
    }
}
