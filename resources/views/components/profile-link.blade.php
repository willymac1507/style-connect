@props(['profile', 'type'])
<div class="flex flex-row gap-4">
{{ ucfirst($type) }} profile: <a href="\profile\{{$type}}\{{$profile->id}}" class="font-semibold text-blue-700">{{ $profile->first_name }} {{ $profile->last_name }}</a>
</div>
