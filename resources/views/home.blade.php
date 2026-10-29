<x-layout>
    <x-slot:title>Accueil - Mini-CMS</x-slot:title>

    <section class="py-10">
        <h1 class="text-4xl font-bold mb-4">Bienvenue sur Mini-CMS</h1>
        <p class="text-lg text-gray-600 mb-6 max-w-2xl">
            Une petite plateforme de publication construite pas à pas pendant l'Atelier Framework Côté Serveur.
        </p>
        <a href="{{ route('posts.index') }}" class="inline-block rounded-md bg-indigo-600 px-5 py-2.5 font-medium text-white hover:bg-indigo-700">
            Lire les articles
        </a>
    </section>

    <section>
        <h2 class="text-2xl font-bold mb-6">Articles récents</h2>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @forelse ($latestPosts as $post)
                <x-post-card :post="$post" />
            @empty
                <p class="text-gray-600">Aucun article publié pour le moment.</p>
            @endforelse
        </div>
    </section>
</x-layout>