@props(['title', 'subtitle' => null])

<div>
    <h1 class="text-3xl font-bold mb-6">{{ $title }}</h1>

    @if ($subtitle !== null)
        <p class="text-gray-700 leading-relaxed mb-6">{{ $subtitle }}</p>
    @endif
</div>