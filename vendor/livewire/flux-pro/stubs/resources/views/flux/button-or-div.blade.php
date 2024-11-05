@props([
    'as' => null,
])

<?php if ($as === 'button'): ?>
    <button type="button" {{ $attributes }}>
        {{ $slot }}
    </button>
<?php else: ?>
    <div type="button" {{ $attributes }}>
        {{ $slot }}
    </div>
<?php endif; ?>
