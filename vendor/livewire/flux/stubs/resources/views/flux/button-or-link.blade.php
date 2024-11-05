@php
extract(Flux::forwardedAttributes($attributes, [
    'type',
    'current',
    'href',
    'as',
]));
@endphp

@props([
    'type' => 'button',
    'current' => null,
    'href' => null,
    'as' => null,
])

@php
$hrefForCurrentDetection = str($href)->startsWith(trim(config('app.url')))
    ? (string) str($href)->after(trim(config('app.url'), '/'))
    : $href;

if ($hrefForCurrentDetection === '') $hrefForCurrentDetection = '/';

$current = $current === null ? ($hrefForCurrentDetection
    ? request()->is($hrefForCurrentDetection === '/' ? '/' : trim($hrefForCurrentDetection, '/'))
    : false) : $current;
@endphp

<?php if ($as === 'div'): ?>
    <div {{ $attributes }}>
        {{ $slot }}
    </div>
<?php elseif ($as === 'a' || $href): ?>
    {{-- We are using e() here to escape the href attribute value instead of "{{ }}" because the latter will escape the entire attribute value, including the "&" character... --}}
    <a href="{!! e($href) !!}" {{ $attributes->merge(['data-current' => $current]) }}>
        {{ $slot }}
    </a>
<?php else: ?>
    <button {{ $attributes->merge(['type' => $type, 'data-current' => $current]) }}>
        {{ $slot }}
    </button>
<?php endif; ?>
