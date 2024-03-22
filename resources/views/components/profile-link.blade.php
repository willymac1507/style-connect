@props(['profile', 'type'])
<div class="flex flex-row">
{{ ucfirst($type) }} profile = <a href="\profiles\{{$type}}\{{$profile->id}}" class="font-semibold text-blue-700">{{ $profile->first_name }} {{ $profile->last_name }}</a>
</div>
