@props(['active' =>  false])

@php
    $classes = "block px-5  text-left hover:bg-blue-300 focus:bg-blue-300 hover:text-white focus:text-white";
    if($active) $classes .= "bg-blue-500 text-green";
@endphp
<a {{ $attributes(["class"=> $classes]) }}>{{ $slot }}</a>
