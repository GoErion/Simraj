@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-slate-400 font-bold'
            : '';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
