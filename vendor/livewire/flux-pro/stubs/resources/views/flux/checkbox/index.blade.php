@aware([ 'variant' ])

@props([
    'variant' => null,
])

@php
$variant = Flux::componentExists('checkbox.variants.' . $variant)
    ? $variant : null;

$variant = $variant === null ? 'default' : $variant;
@endphp

<x-dynamic-component :component="'flux::checkbox.variants.' . $variant" :$attributes :unescapedForwardedAttributes="$attributes">
    {{ $slot }}
</x-dynamic-component>
