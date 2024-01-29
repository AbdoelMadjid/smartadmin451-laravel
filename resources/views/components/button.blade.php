@props([
    'icon' => null,
    'label' => null,
    'color' => 'primary',
    'size' => null,
    'type' => 'button',
    'route' => null,
    'url' => null,
    'href' => null,
    'dismiss' => null,
    'toggle' => null,
    'click' => null,
    'pills' => false,
    'btnicon' => false,
    'circle' => false,
    'confirm' => false,
    'style' => false,
    'block' => false,
    'effect' => false,
])

@php
    if ($route) {
        $href = route($route);
    } elseif ($url) {
        $href = url($url);
    }

    $attributes = $attributes->class([$style ? 'btn btn-outline-' . $color : 'btn btn-' . $color, 'btn-' . $size => $size, 'btn-pills' => $pills, 'btn-icon' => $btnicon, 'rounded-circle' => $circle, 'btn-block' => $block, 'hover-effect-dot' => $effect])->merge([
        'type' => !$href ? $type : null,
        'href' => $href,
        'data-bs-dismiss' => $dismiss,
        'data-bs-toggle' => $toggle,
        'wire:click' => $click,
        'onclick' => $confirm ? 'confirm(\'' . __('Are you sure?') . '\') || event.stopImmediatePropagation()' : null,
    ]);
@endphp

<{{ $href ? 'a' : 'button' }} {{ $attributes }}>
    <x-icon fal :name="$icon" />

    {{ $label ?? $slot }}
    </{{ $href ? 'a' : 'button' }}>
