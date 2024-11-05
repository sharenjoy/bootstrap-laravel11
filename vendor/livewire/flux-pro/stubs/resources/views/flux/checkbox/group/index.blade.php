@props([
    'variant' => null,
])

@php
$variant = $variant === null ? 'default' : $variant;
@endphp

<x-dynamic-component :component="'flux::checkbox.group.variants.' . $variant" :$attributes :unescapedForwardedAttributes="$attributes">
    {{ $slot }}
</x-dynamic-component>
