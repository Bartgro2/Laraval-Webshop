<!-- this form will be used for creating and updating resources. It accepts a method, action, and any additional attributes. -->

@props([
    'method' => 'POST',
    'action' => '',
])

@php $isPut = strtoupper($method) === 'PUT'; @endphp <

<form method="{{ $isPut ? 'POST' : $method }}" action="{{ $action }}" {{ $attributes }}>
    @csrf
    @if($isPut) @method('PUT') @endif

    {{ $slot }}
</form>