@props(['name', 'label', 'type' => 'text', 'value' => ''])

<label for="{{ $name }}">{{ $label ?? ucfirst($name) }}</label>

<input 
    type="{{ $type }}"
    name="{{ $name }}"
    id="{{ $name }}"
    value="{{ old($name, $value) }}"
/>
