@props(['field'])

@error($field)
<div class="text-red-400 text-sm mt-2 font-bold">{{$message}}</div>
@enderror
