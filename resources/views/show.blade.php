
<x-layout>
    <div class="flex w-full">
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-semibold mb-4">
                Links
            </h4>
            <ul>
                <li>
                    <a href="{{ route('notes.show',$notes) }}" class="{{ request()->routeIs('notes.show') ? 'text-blue-500' : '' }}">
                        All Notes
                    </a>
                </li>
                <li>
                    @if(request()->routeIs('notes.index'))
                        @dd('success');
                    @endif

                    <a href="{{ route('notes.index') }}" class="{{ request()->routeIs('notes.index') ? 'text-blue-500' : '' }}"> New Note </a>
                </li>
            </ul>
        </aside>
        <div class="-my-2 overflow-x-auto sm:-mx-10 lg:-mx-8">
            <div class="py-2 align-middle inline-block w-full sm:px-6 lg:px-8 ">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <h3 class="m-2 border-b">All Notes</h3>
                    <table class="max-w-full divide-y divide-gray-200 w-80 flex-col">
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($notes as $note)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $note->note_title }}
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $note->note_datetime }}
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="/notes/{{$note->id}}/show" class="text-blue-500 hover:text-blues-900">Show</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="/notes/{{$note->id}}/edit" class="text-blue-500 hover:text-blues-900">Edit</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <form action="/notes/{{$note->id}}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button class="text-sm text-gray-500">Delete</button>
                                    </form>
                                    {{--                                        <a href="/admin/posts/{{$post->id}}/delete" class="text-red-500 hover:text-red-900">Delete</a>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout>
