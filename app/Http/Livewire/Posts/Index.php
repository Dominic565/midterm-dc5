<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class Index extends Component
{
    public $search, $title = 'all', $content = 'all';
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function showPosts(){
        // $posts = Post::where('user_id',auth()->user()->id)
        // ->orderBy('created_at','DESC')
        $query = Post::orderBy('title')->where('user_id',auth()->user()->id)->orderBy('created_at','DESC')
        ->search($this->search);

        if($this->title != 'all') {
            $query->where('title', $this->title);
        }

        if($this->content != 'all') {
            $query->where('content', $this->content);
        }
        
        $posts = $query->paginate(2);

        return compact('posts');
    }
    public function render()
    {
        return view('livewire.posts.index', $this->showPosts());
    }
}
