<x-layout>
    <form action="/notes/{{ $note->id }}" method="POST">
        @csrf
        @method('PATCH')
        <x-div>
            <x-span name="date-Time"/>
            <x-form.input type="datetime-local" id="note_datetime" class="form-control" name="note_datetime" autocomplete="on" :value="old('title', $note->note_datetime ? \Carbon\Carbon::parse($note->note_datetime)->format('Y-m-d\TH:i') : '')" />
        </x-div>
        <x-div>
            <x-span name="title"/>
            <x-form.input name="note_title" type="text" :value="old('title',$note->note_title)"/>
        </x-div>
        <x-div>
            <x-span name="text" />
            <x-form.textarea
                name="note_description"
                id="note_description"
                rows="5"
                cols="20"
                placeholder="Description"
                value="{{ $note->note_description }}"

            />
        </x-div>

        <x-div class="flex">
            <a href="javascript:history.back()" class="bg-gray-400 px-12 py-2 rounded-xl hover:bg-gray-600 text-center mr-8">Back</a>
            <x-form.button>Update</x-form.button>
        </x-div>


    </form>
</x-layout>
