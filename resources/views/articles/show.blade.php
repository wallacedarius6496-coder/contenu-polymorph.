@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h2 class="card-title fw-bold">{{ $article->titre }}</h2>
                <p class="text-muted"><i class="bi bi-person"></i> {{ $article->auteur }}</p>
                <hr>
                <p class="card-text">{{ $article->contenu }}</p>
            </div>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-header bg-primary text-white fw-bold">
                💬 Commentaires ({{ $article->commentaires->count() }})
            </div>
            <div class="card-body">
                @foreach($article->commentaires as $commentaire)
                    <div class="d-flex mb-3">
                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width:40px;height:40px;min-width:40px">
                            {{ strtoupper(substr($commentaire->auteur, 0, 1)) }}
                        </div>
                        <div class="bg-light rounded p-2 w-100">
                            <strong>{{ $commentaire->auteur }}</strong>
                            <p class="mb-0">{{ $commentaire->contenu }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card shadow-sm mb-4">
            <div class="card-header bg-success text-white fw-bold">🏷️ Tags</div>
            <div class="card-body">
                @foreach($article->tags as $tag)
                    <a href="/tags/{{ $tag->id }}" class="badge bg-success text-decoration-none me-1 fs-6">{{ $tag->libelle }}</a>
                @endforeach
            </div>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-header bg-warning text-dark fw-bold">🖼️ Images</div>
            <div class="card-body">
                @foreach($article->images as $image)
                    <div class="mb-2">
                        <span class="badge bg-secondary">{{ $image->chemin }}</span>
                        <p class="text-muted small mb-0">{{ $image->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <a href="/articles" class="btn btn-outline-primary w-100">← Retour aux articles</a>
    </div>
</div>
@endsection