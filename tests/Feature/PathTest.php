<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PathTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_home_path()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_news_path()
    {
        $response = $this->get('/news');
        $response->assertStatus(200);
    }
    public function test_category_path()
    {
        $response = $this->get('/news/category');
        $response->assertStatus(200);
    }
    public function test_callback_path()
    {
        $response = $this->get('/callback');
        $response->assertStatus(200);
    }
    public function test_data_path()
    {
        $response = $this->get('/data');
        $response->assertStatus(200);
    }
}
