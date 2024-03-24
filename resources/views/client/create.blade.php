<x-app-layout>
    <x-slot name="header">
        <h2 class="hidden sm:block font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Client Profile') }}
        </h2>
    </x-slot>
    <x-page-container>
        <x-page-card title="Create Client Profile">
            <form action="{{ route('profile.client.create') }}" method="post" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="userName"
                    >
                    Username
                    </label>

                    <input class="border border-gray-400 p-2 w-full text-gray-400"
                           type="text"
                           disabled
                           name="userName"
                           id="userName"
                           value="{{ $user->username }}"
                           required
                    >

                    @error('userName')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="hidden mb-2 uppercase font-bold text-xs text-gray-700"
                           for="user_id"
                    >
                    User_id
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="hidden"
                           name="user_id"
                           id="user_id"
                           value="{{ $user->id }}"
                           required
                    >

                    @error('user_id')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="first_name"
                    >
                    First Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="first_name"
                           id="first_name"
                           value="{{ old('first_name') }}"
                           required
                    >

                    @error('first_name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="last_name"
                    >
                    Last Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="last_name"
                           id="last_name"
                           value="{{ old('last_name') }}"
                           required
                    >

                    @error('last_name')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="email"
                    >
                    Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="email"
                           name="email"
                           id="email"
                           value="{{ old('email') }}"
                           required
                    >

                    @error('email')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="tel"
                    >
                    Tel
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="tel"
                           id="tel"
                           value="{{ old('tel') }}"
                           required
                    >

                    @error('tel')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <button type="submit"
                            class="btn-primary-md"
                    >
                        Create
                    </button>
                </div>
            </form>
        </x-page-card>

    </x-page-container>
</x-app-layout>
