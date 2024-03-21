@props(['title'])

<div {{ $attributes->class(['bg-white overflow-hidden shadow-sm sm:rounded-lg']) }}>
    <div class="p-6 text-gray-900">
        <h2 class="font-bold text-xl mb-2">{{$title}}</h2>
        {{ $slot }}
    </div>
</div>
