<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class NewsComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $page_size = 4;
        $articles = Article::paginate($page_size);

        foreach ($articles as $article) {
            $article->comments_count = Comment::where('article_id', $article->id)->count();
        }

        return view('livewire.news-component', [
            "articles" => $articles,
        ])->layout('layouts.base');
    }
}
