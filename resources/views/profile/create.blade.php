<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Profile') }}
        </h2>
    </x-slot>
    <x-page-container>
        @if($canClient)
            <x-page-card title="Create Client">
                <div class="flex flex-row gap-5 align-middle">
                    <p>Create a client profile to allow you to book appointments with stylists.</p>
                    <a href="/profile/client/create" class="btn-primary-md w-40 text-center">Client</a>
                </div>
            </x-page-card>
        @endif
        @if($canStudent)
                <x-page-card title="Create Student">
                    <div class="flex flex-row gap-5 align-middle">
                        <p>Create a student profile to allow you to offer appointments to clients.</p>
                        <a href="/profile/student/create" class="btn-primary-md w-40 text-center">Student</a>
                    </div>
                </x-page-card>
        @endif
        @if($canJoin)
            <x-page-card title="Join Organisation">
                <div class="flex flex-row gap-5 align-middle">
                    <p>Request to link your account to an organisation as a student.</p>
                    <a href="#" class="btn-primary-md w-40 text-center">Request</a>
                </div>
            </x-page-card>
        @endif
    </x-page-container>
</x-app-layout>

