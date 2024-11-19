@props(['tag','size' => 'base'])
@php

$classes = "  font-bold rounded-xl transition-colors duration-300";
if($size == 'base')
{
    $classes .= ' text-sm px-5 py-1 bg-black/10 hover:bg-black/25';
}
if($size == 'small')
{
    $classes .= ' text-2xs px-3 py-1 bg-white/10 hover:bg-white/25';
}

@endphp
<a href="/tags/{{strtolower($tag->name)}}" {{$attributes(['class' => $classes])}}>{{$tag->name}}</a>