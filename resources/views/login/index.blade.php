<x-layout>
    <div class="p-6 mt-4 rounded-xl border border-gray-300">
        <h1 class="text-center font-bold text-xl">Login</h1>

        <form method="POST" action="/notes" class="mt-4">
            @csrf
            <x-div>
                <x-span name="email"> Email</x-span>
                <x-form.input id="email" name="email" type="email" autocomplete="username"/>
            </x-div>

            <x-div>
                <x-span name="password"> Password</x-span>
                <x-form.input id="password" name="password" type="password" autocomplete="password"/>
            </x-div>

            <x-div>
                <button type="submit"
                        class="bg-blue-500 text-white uppercase font-semibold text-sm py-2 px-12 rounded-2xl hover:bg-blue-600">
                    Login
                </button>
            </x-div>
        </form>
    </div>
</x-layout>
