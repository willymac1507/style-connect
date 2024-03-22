<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Profile') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div  class="flex flex-col gap-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div x-data="{ client: {{ $canClient }}}" x-show="client" class="flex flex-row gap-5 align-middle">
                <p>Create a client profile to allow you to book appointments with stylists.</p>
                <a href="#" class="btn-primary-md w-40 text-center">Client</a>
            </div>
            <div x-data="{ student: {{ $canStudent }}}" x-show="student" class="flex flex-row gap-5 align-middle">
                <p>Create a student profile to allow you to offer appointments to clients.</p>
                <a href="#" class="btn-primary-md w-40 text-center">Student</a>
            </div>
            <div x-data="{ join: {{ $canJoin }}}" x-show="join" class="flex flex-row gap-5 align-middle">
                <p>Request to link your account to an organisation as a student.</p>
                <a href="#" class="btn-primary-md w-40 text-center">Request</a>
            </div>

        </div>
    </div>
</x-app-layout>
