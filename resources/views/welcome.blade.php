<x-layout>
    <h1 class="text-lg font-bold mb-8 pb-2 border-b ">
        Manage All Notes
    </h1>
    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-semibold mb-4">
                Links
            </h4>
            <ul>
                <li>
                    <a href="/notes/list" class="{{ request()->is('/') ? 'text-blue-500' : '' }}">
                        All Notes
                    </a>
                </li>
                <li>
                    <a href="/notes" class="{{ request()->is('/') ? 'text-blue-500' : '' }}"> New Note </a>
                </li>
            </ul>
        </aside>

        <main class="max-w-6xl mx-auto space-y-6 items-center border-2 border-gray-300 w-80 rounded-xl flex-1">
            {{--            p-6 rounded-xl border border-gray-300--}}
            <form method="POST" action="{{ route('notes.store') }}">
                @csrf
                <header class="text-xl m-4 text-center">
                    Notes
                </header>
                <x-div>
                    <x-span name="date" />
                    <x-form.input type="datetime-local" id="note_datetime" class="form-control" name="note_datetime" autocomplete="on" />
                </x-div>
                <x-div>
                    <x-span name="title" />
                    <x-form.input
                        name="note_title"
                        type="text"
                        placeholder="Title"
                    />
                </x-div>

                <x-div>
                    <x-span name="text" />

                    <x-form.textarea
                        name="note_description"
                        id="note_description"
                        rows="5"
                        cols="20"
                        placeholder="Description"
                        />
                </x-div>
                <x-div>
                    <x-form.button>Submit</x-form.button>
                </x-div>
            </form>
        </main>
    </div>
    <x-flash/>
</x-layout>
