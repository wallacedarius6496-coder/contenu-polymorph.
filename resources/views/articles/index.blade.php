@extends('layout')

@section('content')
    <h2>Articles</h2>
    @foreach($articles as $article)
        <div class="card mb-3">
            <div class="card-body">
                <h5><a href="/articles/{{ $article->id }}">{{ $article->titre }}</a></h5>
                <p>Auteur : {{ $article->auteur }}</p>
                <p>Commentaires : {{ $article->commentaires->count() }}</p>
                <p>Tags :
                    @foreach($article->tags as $tag)
                        <span class="badge bg-primary">{{ $tag->libelle }}</span>
                    @endforeach
                </p>
            </div>
        </div>
    @endforeach
@endsection