<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Video;
use App\Models\Tag;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // 1. Créer les tags
        $tags = [
            Tag::create(['libelle' => 'Laravel']),
            Tag::create(['libelle' => 'PHP']),
            Tag::create(['libelle' => 'Web']),
            Tag::create(['libelle' => 'Tutoriel']),
            Tag::create(['libelle' => 'Débutant']),
        ];

        // 2. Créer les articles
        $article1 = Article::create([
            'titre' => 'Introduction à Laravel',
            'contenu' => 'Laravel est un framework PHP puissant...',
            'auteur' => 'Kader',
        ]);
        $article2 = Article::create([
            'titre' => 'Les migrations Laravel',
            'contenu' => 'Les migrations permettent de versionner...',
            'auteur' => 'Awa',
        ]);
        $article3 = Article::create([
            'titre' => 'Eloquent ORM',
            'contenu' => 'Eloquent est le ORM de Laravel...',
            'auteur' => 'Moussa',
        ]);

        // 3. Créer les vidéos
        $video1 = Video::create([
            'titre' => 'Tuto Laravel débutant',
            'url' => 'https://youtube.com/watch?v=abc',
            'duree' => 3600,
        ]);
        $video2 = Video::create([
            'titre' => 'PHP en 1 heure',
            'url' => 'https://youtube.com/watch?v=def',
            'duree' => 3600,
        ]);
        $video3 = Video::create([
            'titre' => 'Créer une API REST',
            'url' => 'https://youtube.com/watch?v=ghi',
            'duree' => 5400,
        ]);

        // 4. Commentaires sur articles
        $article1->commentaires()->create(['auteur' => 'Ali', 'contenu' => 'Super article !']);
        $article2->commentaires()->create(['auteur' => 'Fatou', 'contenu' => 'Très clair merci']);
        $article3->commentaires()->create(['auteur' => 'Seun', 'contenu' => 'Bien expliqué']);

        // 5. Commentaires sur vidéos
        $video1->commentaires()->create(['auteur' => 'Idriss', 'contenu' => 'Excellente vidéo']);
        $video2->commentaires()->create(['auteur' => 'Mariam', 'contenu' => 'Merci beaucoup']);
        $video3->commentaires()->create(['auteur' => 'Brice', 'contenu' => 'Très utile']);

        // 6. Images sur articles
        $article1->images()->create(['chemin' => 'images/laravel.png', 'description' => 'Logo Laravel']);
        $article2->images()->create(['chemin' => 'images/migration.png', 'description' => 'Schema migration']);

        // 7. Images sur vidéos
        $video1->images()->create(['chemin' => 'images/tuto.png', 'description' => 'Miniature tuto']);
        $video2->images()->create(['chemin' => 'images/php.png', 'description' => 'Logo PHP']);

        // 8. Tags sur articles
        $article1->tags()->attach([$tags[0]->id, $tags[1]->id, $tags[3]->id]);
        $article2->tags()->attach([$tags[0]->id, $tags[2]->id]);
        $article3->tags()->attach([$tags[1]->id, $tags[4]->id]);

        // 9. Tags sur vidéos
        $video1->tags()->attach([$tags[0]->id, $tags[3]->id, $tags[4]->id]);
        $video2->tags()->attach([$tags[1]->id, $tags[2]->id]);
        $video3->tags()->attach([$tags[0]->id, $tags[2]->id]);
    }
}