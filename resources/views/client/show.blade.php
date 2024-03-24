<x-app-layout>
    <x-slot name="header">
        <h2 class="hidden sm:block font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Client Profile') }}
        </h2>
    </x-slot>
    <x-page-container>
        <x-page-card title="Client Profile">
            <p>This is your client profile. These are the details you will share with the students when you make an appointment for a service.
             Please be aware that your name and username will be viewable by all students, so be mindful in your choice! Your email address,telephone number and previous tests / service records will not be made available to a student until you have agreed an appointment with them. If you wish to change any details, click on the EDIT button below.</p>
        </x-page-card>
        <x-page-card>
            <div class="flex flex-col gap-3">
                <div class="flex gap-4">
                    <h3 class="font-bold">User Name: </h3>{{ $client->user->username }}
                </div>
                <div class="flex gap-4">
                    <h3 class="font-bold">First name: </h3>{{ $client->first_name }}
                </div>
                <div class="flex gap-4">
                    <h3 class="font-bold">Last name: </h3>{{ $client->last_name }}
                </div>
                <div class="flex gap-4">
                    <h3 class="font-bold">Email: </h3>{{ $client->email }}
                </div>
                <div class="flex gap-4">
                    <h3 class="font-bold">Tel: </h3>{{ $client->tel }}
                </div>
                <a href="/profile/client/{{ $client->id }}/edit" class="btn-primary-md max-w-12">Edit</a>
            </div>

        </x-page-card>
    </x-page-container>

</x-app-layout>
