<?php

namespace App\Http\Controllers\Home;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Jorenvh\Share\Share;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = 'Kategori: ' . $category->name;
        }
        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' Oleh ' . $author->name;
        }
        $posts = Post::latest()->filter(request(['search', 'category', 'author']))->paginate(9)->withQueryString();
        $categories = Category::latest()->get();
        $shareComponent = new Share();
        $shareComponent->page(
            'http://www.mas-blog.test/articles',
            'Your share text comes here'
        )->facebook()->twitter()->linkedin()->telegram()->whatsapp()->instagram();

        return view('home.posts.posts', [
            'posts' => $posts,
            'subtitle' => $title,
            'categories' => $categories,
            'shareComponent' => $shareComponent
        ]);
    }

    public function show($slug)
    {
        $shareComponent = new Share();
        $url = str_replace('{slug}', $slug, 'http://www.mas-blog.test/articles/{slug}');
        $shareComponent->page($url);
        $shareComponent->facebook()->twitter()->linkedin()->telegram()->whatsapp()->instagram();
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('home.posts.post', compact('post', 'shareComponent'));
    }
}