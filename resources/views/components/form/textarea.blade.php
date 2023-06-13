@props(['name','id','placeholder','autocomplete','rows','cols','value'])
<textarea
    name="{{ $name }}"
    id="{{ $id ?? '' }}"
    class="border border-gray-200 p-2 w-full rounded"
    placeholder="{{ $placeholder ?? '' }}  "
    autocomplete="{{ $autocomplete ?? ''}}"
    {{ $attributes(['value'=>old($name)]) }}
    rows="{{ $rows }}"
    cols="{{ $cols }}"
    value="{{ $value ?? '' }}"
    required
    >{{ $value ?? '' }}</textarea>
