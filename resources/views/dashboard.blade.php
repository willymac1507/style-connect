<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="flex flex-col gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-dashboard-item title="Profiles">
                @if(count($profiles) < 1)
                    You have no active profiles. Please <a href="{{ route('profile.create') }}" class="link">create a
                        profile</a> to continue.
                @else
                @foreach($profiles as $profile)
                    <x-profile-link :profile="$profile['profile']" :type="$profile['type']"/>
                @endforeach
                @endif
            </x-dashboard-item>
            <x-dashboard-item x-data="{active: {{ count($profiles) > 0}}}" x-show="active" title="Upcoming Appointments">
                You have no upcoming appointments. Click <a href="#" class="link">here</a> to access your bookings system.
            </x-dashboard-item>
            <x-dashboard-item title="Your Organisation">
                @if($org)
                    Organisation: {{ $org->name }}
                @else
                    You are not linked to an organisation as a student. If you are a student and would like to offer appointments to clients, you need to be linked to a registered training organisation or salon. Click <a href="#" class="link">here</a> to request access.
                @endif
            </x-dashboard-item>
        </div>
    </div>
</x-app-layout>
