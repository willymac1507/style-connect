<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-page-container>
        <x-page-card title="Profiles">
            @if(count($profiles) < 1)
                You have no active profiles. Please <a href="{{ route('profile.create') }}" class="link">create a
                    profile</a> to continue.
            @else
                @foreach($profiles as $profile)
                    <x-profile-link :profile="$profile['profile']" :type="$profile['type']"/>
                @endforeach
            @endif
        </x-page-card>
        @if(count($profiles) > 0)
        <x-page-card title="Upcoming Appointments">
            You have no upcoming appointments. Click <a href="#" class="link">here</a> to access your bookings system.
        </x-page-card>
        @endif
        <x-page-card title="Your Organisation">
            @if($org)
                {{ $org->organisation }}
            @else
                You are not linked to an organisation as a student. If you are a student and would like to offer
                appointments to clients, you need to be linked to a registered training organisation or salon. Click <a
                    href="#" class="link">here</a> to request access.
            @endif
        </x-page-card>

    </x-page-container>
</x-app-layout>
