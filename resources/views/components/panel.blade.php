@php
 $classes = 'bg-black/90 p-4 text-white rounded-xl border border-transparent  hover:border-red-900 group transition-colors duration-300'
@endphp

<div {{$attributes(['class' => $classes])}}>
    {{$slot}}
</div>