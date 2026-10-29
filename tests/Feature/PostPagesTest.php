<?php

use App\Models\Post;

beforeEach(function () {
    $this->withoutVite();
});

it('shows the posts list', function () {
    Post::create([
        'title' => 'Premier article',
        'slug' => 'premier-article',
        'body' => 'Contenu du premier article de test.',
        'is_published' => true,
        'published_at' => now(),
    ]);

    $this->get(route('posts.index'))
        ->assertOk()
        ->assertSee('Premier article');
});

it('shows a message when there is no post', function () {
    $this->get(route('posts.index'))
        ->assertOk()
        ->assertSee('Aucun article');
});

it('shows published posts and hides drafts on the homepage', function () {
    Post::create([
        'title' => 'Article publié',
        'slug' => 'article-publie',
        'body' => 'Contenu de l’article publié sur la page d’accueil.',
        'is_published' => true,
        'published_at' => now(),
    ]);

    Post::create([
        'title' => 'Article brouillon',
        'slug' => 'article-brouillon',
        'body' => 'Contenu du brouillon à ne pas afficher.',
        'is_published' => false,
        'published_at' => null,
    ]);

    $this->get(route('home'))
        ->assertOk()
        ->assertSee('Article publié')
        ->assertDontSee('Article brouillon');
});

it('shows only the three latest published posts in order on the homepage', function () {
    Post::create([
        'title' => 'Article le plus ancien',
        'slug' => 'article-plus-ancien',
        'body' => 'Contenu de l’article le plus ancien.',
        'is_published' => true,
        'published_at' => now()->subDays(4),
    ]);

    Post::create([
        'title' => 'Troisième article',
        'slug' => 'troisieme-article',
        'body' => 'Contenu du troisième article publié.',
        'is_published' => true,
        'published_at' => now()->subDays(3),
    ]);

    Post::create([
        'title' => 'Deuxième article',
        'slug' => 'deuxieme-article',
        'body' => 'Contenu du deuxième article publié.',
        'is_published' => true,
        'published_at' => now()->subDays(2),
    ]);

    Post::create([
        'title' => 'Article le plus récent',
        'slug' => 'article-plus-recent',
        'body' => 'Contenu de l’article le plus récent.',
        'is_published' => true,
        'published_at' => now()->subDay(),
    ]);

    $this->get(route('home'))
        ->assertOk()
        ->assertSeeInOrder([
            'Article le plus récent',
            'Deuxième article',
            'Troisième article',
        ])
        ->assertDontSee('Article le plus ancien');
});

it('shows an empty state when the homepage has no published posts', function () {
    $this->get(route('home'))
        ->assertOk()
        ->assertSee('Aucun article publié pour le moment.');
});

it('shows a single post', function () {
    $post = Post::create([
        'title' => 'Article complet',
        'slug' => 'article-complet',
        'body' => 'Texte complet de cet article de test.',
        'is_published' => true,
        'published_at' => now(),
    ]);

    $this->get(route('posts.show', $post))
        ->assertOk()
        ->assertSee('Texte complet de cet article de test.');
});

it('returns 404 for an unknown post', function () {
    $this->get('/posts/999')->assertNotFound();
});

it('shows the create form', function () {
    $this->get(route('posts.create'))
        ->assertOk()
        ->assertSee('Nouvel article');
});
