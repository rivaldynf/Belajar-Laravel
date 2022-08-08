<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Rivaldy Nur Fachriza',
            'username' => 'rivaldynf',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
            
        ]);

        // User::create([
        //     'name' => 'Cristiano Ronaldo',
        //     'email' => 'cronaldo@gmail.com',
        //     'password' => bcrypt('123')
            
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        
        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos autem placeat minima esse modi ratione nemo. Doloremque, necessitatibus distinctio quasi aliquid non eaque officiis pariatur tempore dolore earum dolorem',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos autem placeat minima esse modi ratione nemo. Doloremque, necessitatibus distinctio quasi aliquid non eaque officiis pariatur tempore dolore earum dolorem libero excepturi porro consequuntur rem ut.</p> <p>Quod modi odit sit laboriosam saepe cupiditate illum? Consequuntur, cupiditate expedita deserunt earum mollitia cum ex totam magnam dolorum temporibus facere illo, quo, consectetur quibusdam! Ut aliquid, blanditiis explicabo quae molestiae maxime eveniet quisquam voluptate reiciendis ratione natus, non quas unde, quod sunt iste eos.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos autem placeat minima esse modi ratione nemo. Doloremque, necessitatibus distinctio quasi aliquid non eaque officiis pariatur tempore dolore earum dolorem',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos autem placeat minima esse modi ratione nemo. Doloremque, necessitatibus distinctio quasi aliquid non eaque officiis pariatur tempore dolore earum dolorem libero excepturi porro consequuntur rem ut.</p> <p>Quod modi odit sit laboriosam saepe cupiditate illum? Consequuntur, cupiditate expedita deserunt earum mollitia cum ex totam magnam dolorum temporibus facere illo, quo, consectetur quibusdam! Ut aliquid, blanditiis explicabo quae molestiae maxime eveniet quisquam voluptate reiciendis ratione natus, non quas unde, quod sunt iste eos.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos autem placeat minima esse modi ratione nemo. Doloremque, necessitatibus distinctio quasi aliquid non eaque officiis pariatur tempore dolore earum dolorem',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos autem placeat minima esse modi ratione nemo. Doloremque, necessitatibus distinctio quasi aliquid non eaque officiis pariatur tempore dolore earum dolorem libero excepturi porro consequuntur rem ut.</p> <p>Quod modi odit sit laboriosam saepe cupiditate illum? Consequuntur, cupiditate expedita deserunt earum mollitia cum ex totam magnam dolorum temporibus facere illo, quo, consectetur quibusdam! Ut aliquid, blanditiis explicabo quae molestiae maxime eveniet quisquam voluptate reiciendis ratione natus, non quas unde, quod sunt iste eos.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        
        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos autem placeat minima esse modi ratione nemo. Doloremque, necessitatibus distinctio quasi aliquid non eaque officiis pariatur tempore dolore earum dolorem',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci quos autem placeat minima esse modi ratione nemo. Doloremque, necessitatibus distinctio quasi aliquid non eaque officiis pariatur tempore dolore earum dolorem libero excepturi porro consequuntur rem ut.</p> <p>Quod modi odit sit laboriosam saepe cupiditate illum? Consequuntur, cupiditate expedita deserunt earum mollitia cum ex totam magnam dolorum temporibus facere illo, quo, consectetur quibusdam! Ut aliquid, blanditiis explicabo quae molestiae maxime eveniet quisquam voluptate reiciendis ratione natus, non quas unde, quod sunt iste eos.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
