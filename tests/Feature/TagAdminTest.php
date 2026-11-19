<?php

use App\Models\Tag;

beforeEach(function () {
    $this->withoutVite();
});

function tagAdminFixture(array $overrides = []): array
{
    return array_merge([
        'name' => 'Laravel',
        'slug' => 'laravel',
    ], $overrides);
}

it('creates a tag and flashes a message', function () {
    $this->post(route('admin.tags.store'), tagAdminFixture())
        ->assertRedirect(route('admin.tags.index'))
        ->assertSessionHas('success', 'Tag créé.');

    $this->assertDatabaseHas('tags', ['name' => 'Laravel', 'slug' => 'laravel']);
});

it('rejects an empty tag with French required messages', function () {
    $this->post(route('admin.tags.store'), ['name' => '', 'slug' => ''])
        ->assertSessionHasErrors([
            'name' => 'Le champ nom est obligatoire.',
            'slug' => 'Le champ slug est obligatoire.',
        ]);

    $this->assertDatabaseCount('tags', 0);
});

it('rejects a slug already used by another tag', function () {
    Tag::factory()->create(['name' => 'PHP', 'slug' => 'php']);

    $this->post(route('admin.tags.store'), tagAdminFixture(['slug' => 'php']))
        ->assertSessionHasErrors([
            'slug' => 'Ce slug est déjà utilisé par un autre tag.',
        ]);
});

it('blocks tag writes when the site is read-only', function () {
    config(['site.read_only' => true]);

    $this->post(route('admin.tags.store'), tagAdminFixture())
        ->assertStatus(503)
        ->assertSee('Le site est en lecture seule.');

    $this->assertDatabaseCount('tags', 0);
});

it('still shows the tag list when the site is read-only', function () {
    Tag::factory()->create(['name' => 'Lisible', 'slug' => 'lisible']);
    config(['site.read_only' => true]);

    $this->get(route('admin.tags.index'))
        ->assertOk()
        ->assertSee('Lisible');
});
