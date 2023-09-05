<form method="POST" action="{{route('advertisements.update', $partner->advertisement)}}">
    @method('PUT')
    @csrf
    <x-dashboard.card title="advert categories">
        <ul>
            @foreach($categories as $category)
                <li>
                    <p>{{$category[app()->getLocale()]}}</p>

                    <ul class="ml-6">
                        @foreach($category->children as $subCategory)
                            <li>
                                <x-forms.checkbox name="items[]"
                                                  :label="$subCategory[app()->getLocale()] . $subCategory->id"
                                                  value="{{$subCategory->id}}"
                                                  :key="$partner->id"
                                                  :checked="$activeCategoryChildren->has($subCategory->id)"/>
                            </li>

                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>


        <x-slot:actions>
            <button type="submit" class="text-sm text-success w-full p-2 hover:underline">
                Save
            </button>
        </x-slot:actions>
    </x-dashboard.card>

</form>


