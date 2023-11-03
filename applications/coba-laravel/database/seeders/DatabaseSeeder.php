<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Malwi Hidayat',
        //     'email' => 'malwihidayatt@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Fauzi Ilyas',
        //     'email' => 'fauziilyas@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => ' Recusandae quasi iste odio et neque repudiandae ipsam. Esse earum reiciendis mollitia quisquam. Minus dolorem perspiciatis deserunt. Unde consectetur facilis quaerat pariatur, dicta error aut nesciunt possimus, magnam doloremque laboriosam explicabo animi temporibus nihil sit sequi optio facere nemo ipsa provident? Est perferendis, facilis rem quisquam soluta sed modi deleniti eum id consequuntur cumque sint nemo dolores? Dolor nobis ut tempora pariatur fugit aperiam. Officia repudiandae veritatis esse amet voluptatem sapiente inventore autem ut pariatur laudantium nulla, nemo eligendi quod eos voluptatum cupiditate in maxime facere labore animi atque nobis eaque porro.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => ' Recusandae quasi iste odio et neque repudiandae ipsam. Esse earum reiciendis mollitia quisquam. Minus dolorem perspiciatis deserunt. Unde consectetur facilis quaerat pariatur, dicta error aut nesciunt possimus, magnam doloremque laboriosam explicabo animi temporibus nihil sit sequi optio facere nemo ipsa provident? Est perferendis, facilis rem quisquam soluta sed modi deleniti eum id consequuntur cumque sint nemo dolores? Dolor nobis ut tempora pariatur fugit aperiam. Officia repudiandae veritatis esse amet voluptatem sapiente inventore autem ut pariatur laudantium nulla, nemo eligendi quod eos voluptatum cupiditate in maxime facere labore animi atque nobis eaque porro.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => ' Recusandae quasi iste odio et neque repudiandae ipsam. Esse earum reiciendis mollitia quisquam. Minus dolorem perspiciatis deserunt. Unde consectetur facilis quaerat pariatur, dicta error aut nesciunt possimus, magnam doloremque laboriosam explicabo animi temporibus nihil sit sequi optio facere nemo ipsa provident? Est perferendis, facilis rem quisquam soluta sed modi deleniti eum id consequuntur cumque sint nemo dolores? Dolor nobis ut tempora pariatur fugit aperiam. Officia repudiandae veritatis esse amet voluptatem sapiente inventore autem ut pariatur laudantium nulla, nemo eligendi quod eos voluptatum cupiditate in maxime facere labore animi atque nobis eaque porro.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
