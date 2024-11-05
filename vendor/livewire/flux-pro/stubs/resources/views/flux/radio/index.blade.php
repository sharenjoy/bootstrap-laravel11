@aware([ 'variant' ])

@props([
    'variant' => null,
])

@php
$variant = Flux::componentExists('radio.variants.' . $variant)
    ? $variant : null;

$variant = $variant === null ? 'default' : $variant;
@endphp

<x-dynamic-component :component="'flux::radio.variants.' . $variant" :$attributes :unescapedForwardedAttributes="$attributes">
    {{ $slot }}
</x-dynamic-component>
