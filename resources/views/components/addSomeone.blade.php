<x-app-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Add Someone</h1>

            <form method="POST" action="/add" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="name"
                    >
                        Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="name"
                           id="name"
                           value="{{ old('name') }}"
                           required
                    >
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="surname"
                    >
                        Surname
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="surname"
                           id="surname"
                           value="{{ old('surname') }}"
                           required
                    >
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
                           for="mobile"
                    >
                        Mobile No
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="number"
                           name="mobile"
                           id="mobile"
                           value="{{ old('mobile') }}"
                           required
                    >
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="sa_id"
                    >
                        SA ID no.
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="number"
                           name="sa_id"
                           id="sa_id"
                           required
                    >

                    @error('sa_id')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="birthdate"
                    >
                        Date of Birth
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="date"
                           name="birthdate"
                           id="birthdate"
                           required
                    >

                    @error('birthdate')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                </div>

                <div class="mb-6">
                    <label for="language" class="col-sm-4 col-form-label text-md-right"> Select their language...</label>
                    <div class="border-gray-400 p-2 w-full">
                        <select class="border border-gray-400 p-2 w-full form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="language">
                            @foreach($languages as $language)
                                <option value="{{ $language->english_language_name }}">{{ $language->english_language_name }}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('language'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('language') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <x-select :interests="$interests">
                @error('interests')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
                </x-select>

                <div class="mb-6">
                    <x-primary-button class="ms-4">
                        {{ __('Submit') }}
                    </x-primary-button>
                </div>
            </form>
        </main>
    </section>
</x-app-layout>