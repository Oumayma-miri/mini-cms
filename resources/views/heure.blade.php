<x-layout>
    <x-slot:title>Heure du serveur - Mini-CMS</x-slot:title>

    <h1 class="text-3xl font-bold">Heure du serveur</h1>
    <p class="mt-4 text-gray-700">L'heure actuelle du serveur est : {{ $heure }}</p>
    <p class="mt-2 text-gray-700">La date actuelle du serveur est : {{ $date }}</p>
    <p class="mt-6">
        <a href="{{ route('about') }}" class="text-red-600 underline">Retour à la page À propos</a>
    </p>        
</x-layout>