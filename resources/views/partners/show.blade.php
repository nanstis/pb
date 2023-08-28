<x-app-layout>
    <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <x-application-logo/>
        </div>

        <x-card title="Company">
            @if($partner->advertisement()->first() == null)
                <form method="POST" action="{{route('advertisements.store')}}">
                    @csrf
                    <input type="hidden" name="partner_id" value="{{$partner->id}}">
                    <x-forms.button>
                        Publish
                    </x-forms.button>
                </form>
            @endif

            <x-card.item label="Company name" :text="$partner->name"/>
        </x-card>
    </div>

</x-app-layout>


