<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class BlogTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/blog');

        $response->assertStatus(200);
    }
    public function test_blog_can_store()
    {
        Storage::fake('avatars');
        $image = UploadedFile::fake()->image('avatar.jpg');
        $response = $this->post('blog',[
            'title'=>'test post',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero voluptatibus consequatur harum at possimus ab! Assumenda, odio quasi doloremque architecto explicabo perspiciatis ad quo dolorem cum, omnis exercitationem culpa accusamus?',
            'image'=>$image

        ]);
        // Storage::disk('avatars')->assertExists($image->hashName());
        // $this->assertFileExists(public_path())
        $response->assertStatus(200);
    }
    public function test_blog_can_update()
    {
        Storage::fake('avatars');
        $image = UploadedFile::fake()->image('avatar.jpg');
        $response = $this->post('blog',[
            'title'=>'test post',
            'body'=> 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero voluptatibus consequatur harum at possimus ab! Assumenda, odio quasi doloremque architecto explicabo perspiciatis ad quo dolorem cum, omnis exercitationem culpa accusamus?',
            'image'=>$image

        ]);
        // Storage::disk('avatars')->assertExists($image->hashName());
        $response->assertStatus(200);
    }

}
