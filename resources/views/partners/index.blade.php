<x-app-layout>
    <x-application-card breadcrumb="partner.index">
        <ul>
            @foreach($partners as $partner)
                <li>
                    <a href="{{route('partners.show', $partner->name)}}">
                        {{$partner->name}}
                    </a>
                </li>
            @endforeach
        </ul>
    </x-application-card>
</x-app-layout>
