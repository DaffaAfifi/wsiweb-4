<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class Index extends Component
{
    // public $posts;
    public $search;
    protected $updateQueryString = ['search'];
    use WithPagination;

    public function destroy($id){
        $post = Post::find($id);

        if($post){
            $post->delete();

            session()->flash('success', 'Data Berhasil Dihapus');
            return redirect()->route('post.index');
        }
    }

    public function render()
    {

        // $this->posts = Post::latest()->paginate(5);

        return view('livewire.post.index', [
            'posts' => $this->search === null ? Post::latest()->paginate(5) : Post::where('title', 'like', '%' .$this->search. '%')->latest()->paginate(5) 
        ])->extends('layouts.app');
    }
}
