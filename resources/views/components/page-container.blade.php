@props([
    'profiles',
    'org'
])
<div {{ $attributes->class(['py-12']) }}>
    <div class="flex flex-col gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        {{ $slot }}
    </div>
</div>
