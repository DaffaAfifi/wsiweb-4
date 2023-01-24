<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;
use App\Models\Post;

class Edit extends Component
{
    public $postId;
    public $title;
    public $content;

    public function mount($id){
        $post = Post::find($id);

        if ($post) {
            $this->postId = $post->id;
            $this->title = $post->title;
            $this->content = $post->content;
        }
    }

    public function update(){
        $post = Post::find($this->postId);

        if ($post) {
            $post->update([
                'title' => $this->title,
                'content' => $this->content
            ]);
        }

        session()->flash('success', 'Data Berhasil Diubah');
        return redirect()->route('post.index');
    }

    public function render()
    {
        return view('livewire.post.edit')->extends('layouts.app');
    }
}
