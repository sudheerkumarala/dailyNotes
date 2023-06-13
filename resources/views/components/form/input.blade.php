@props(['type','name','placeholder','id','autocomplete'])

<input
    type="{{ $type ?? ''}}"
    name="{{ $name }}"
    id="{{ $id ?? '' }}"
    class="border border-gray-200 p-2 w-full rounded"
    placeholder="{{ $placeholder ?? '' }}  "
    autocomplete="{{ $autocomplete ?? ''}}"
    {{ $attributes(['value'=>old($name)]) }}
    required
/>
