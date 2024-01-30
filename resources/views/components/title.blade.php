@props([
    'icon' => null,
    'title' => null,
    'subtitle' => null,
    'l' => null,
    'info' => false,
    'primary' => false,
    'secondary' => false,
    'warning' => false,
    'danger' => false,
    'success' => false,
    'big' => false,
])

@php
    $attributes = $attributes->class(['fw-900', 'fs-xxl' => $big, 'text-warning' => $warning, 'text-success' => $success, 'text-info' => $info, 'text-primary' => $primary, 'text-danger' => $danger, 'text-secondary' => $secondary])->merge([
        //
    ]);
@endphp

<{{ $l ? "h{$l}" : 'span' }} {{ $attributes }}>
    @if ($icon)
        <x-icon fal :name="$icon" class="mr-2" />
    @endif
    @if ($title)
        {{ $title }}
    @endif
    <span class="fw-300"><i>{{ $subtitle ?? $slot }}</i></span>
    </{{ $l ? "h{$l}" : 'span' }}>
