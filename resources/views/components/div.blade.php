@props(['class'])
<div class="m-3 {{ $class ?? '' }}">
    {{ $slot }}
</div>
