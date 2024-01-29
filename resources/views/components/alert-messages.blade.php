@props([
    'icon' => false,
    'label' => null,
    'color' => 'success',
    'dismissible' => false,
])

@php
    $attributes = $attributes->class(['alert alert-' . $color . ' fade show mb-0', 'alert-dismissible' => $dismissible])->merge([
        //
    ]);
@endphp

<div {{ $attributes }} role = 'alert'>
    <x-icon fal :name="$icon" />

    {{ $label ?? $slot }}

    @if ($dismissible)
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="fal fa-times"></i></span>
        </button>
    @endif
</div>
