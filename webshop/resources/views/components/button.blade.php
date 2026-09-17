@props(['type' => 'button', 'class' => ''])

<button type="{{ $type }}" class="{{ $class }}">
    {{ $slot }}
</button>