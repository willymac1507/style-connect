<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="flex flex-col gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-dashboard-item title="Profiles">
                @if(isset(auth()->user()->student) || isset(auth()->user()->client))
                @if(isset(auth()->user()->student))
                    <x-profile-link :profile="auth()->user()->student" type="student"/>
                @endif
                @if(isset(auth()->user()->client))
                    <x-profile-link :profile="auth()->user()->client" type="client"/>
                @endif
                @else
                    You have no active profiles. Please <a href="#" class="text-blue-700 font-semibold">create a
                        profile</a> to continue.
                @endif
            </x-dashboard-item>
            <x-dashboard-item title="Upcoming Appointments">
                You have no upcoming appointments.
            </x-dashboard-item>
        </div>
    </div>
</x-app-layout>
