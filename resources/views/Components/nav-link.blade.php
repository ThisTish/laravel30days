@props(['active' => false, 'type'])

@if($type === 'a')
<a  
class="{{ $active ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}  px-3 py-2 rounded-md font-medium text-white text-sm"
aria-current="{{ $active ? 'page' : 'false'}}"
{{ $attributes }}
>

{{ $slot}}
</a>


@else
    <button  
class="{{ $active ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }}  px-3 py-2 rounded-md font-medium text-white text-sm"
aria-current="{{ $active ? 'page' : 'false'}}"
{{ $attributes }}
>

{{ $slot}}
</button>

@endif