@props(['name'])

@error($name)
<p class="text-amber-900 text-semibold">
    {{$message}}
</p>
@enderror