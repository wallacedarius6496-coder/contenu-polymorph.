@extends('layout')

@section('content')
<h2 class="fw-bold mb-4">🎬 Vidéos</h2>
<div class="row">
    @foreach($videos as $video)
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100 border-0">
            <div class="card-body">
                <h5 class="card-title fw-bold">
                    <a href="/videos/{{ $video->id }}" class="text-decoration-none text-dark">{{ $video->titre }}</a>
                </h5>
                <p class="text-muted small">⏱️ {{ gmdate("H:i:s", $video->duree) }}</p>
                <p class="mb-1">💬 {{ $video->commentaires->count() }} commentaire(s)</p>
                <div class="mt-2">
                    @foreach($video->tags as $tag)
                        <span class="badge bg-success me-1">{{ $tag->libelle }}</span>
                    @endforeach
                </div>
            </div>
            <div class="card-footer bg-transparent">
                <a href="/videos/{{ $video->id }}" class="btn btn-sm btn-success w-100">Voir la vidéo</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection