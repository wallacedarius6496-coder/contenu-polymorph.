@extends('layout')

@section('content')
<div class="mb-4">
    <h2 class="fw-bold">🏷️ Tag : <span class="badge bg-primary fs-4">{{ $tag->libelle }}</span></h2>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card shadow-sm mb-4 border-0">
            <div class="card-header bg-primary text-white fw-bold">📄 Articles associés</div>
            <div class="card-body">
                @forelse($tag->articles as $article)
                    <div class="mb-3 p-2 border-start border-primary border-3">
                        <a href="/articles/{{ $article->id }}" class="text-decoration-none fw-bold">{{ $article->titre }}</a>
                        <p class="text-muted small mb-0">✍️ {{ $article->auteur }}</p>
                    </div>
                @empty
                    <p class="text-muted">Aucun article associé.</p>
                @endforelse
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow-sm mb-4 border-0">
            <div class="card-header bg-success text-white fw-bold">🎬 Vidéos associées</div>
            <div class="card-body">
                @forelse($tag->videos as $video)
                    <div class="mb-3 p-2 border-start border-success border-3">
                        <a href="/videos/{{ $video->id }}" class="text-decoration-none fw-bold">{{ $video->titre }}</a>
                        <p class="text-muted small mb-0">⏱️ {{ gmdate("H:i:s", $video->duree) }}</p>
                    </div>
                @empty
                    <p class="text-muted">Aucune vidéo associée.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection