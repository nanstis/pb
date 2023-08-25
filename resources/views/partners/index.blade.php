<x-app-layout>
    <div>
        @foreach($partners as $partner)
            {{$partner->name}}
        @endforeach
    </div>
</x-app-layout>
