<x-app-layout>
    <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <x-application-logo/>
        </div>

        <x-card title="Company">
            @php
                $advertisement = $partner->advertisement()->first();
                $trashed = $partner->advertisement()->onlyTrashed()->first();

                $isPublished = $advertisement !== null;
                $isTrashed = $trashed !== null;
            @endphp

            <x-card.item label="Status" :text="$isPublished ? 'Publié' : 'Non publié'">
                @if(!$isPublished && !$isTrashed)
                    <form method="POST" action="{{route('advertisements.store')}}">
                        @csrf
                        <input type="hidden" name="partner_id" value="{{$partner->id}}">
                        <button type="submit" class="text-primary hover:underline">
                            Publish
                        </button>
                    </form>
                @elseif($isTrashed)
                    <form method="POST" action="{{route('advertisements.update', ['id' => $trashed->id])}}">
                        @method('PUT')
                        @csrf
                        <button type="submit" class="text-primary hover:underline">
                            Publish
                        </button>
                    </form>
                @else
                    <form method="POST" action="{{route('advertisements.destroy', $advertisement)}}">
                        @method('DELETE')
                        @csrf

                        <button type="submit" class="text-primary hover:underline">
                            Remove publication
                        </button>
                    </form>
                @endif
            </x-card.item>

            <x-card.item label="Company name" :text="$partner->name"/>
        </x-card>
    </div>

</x-app-layout>


