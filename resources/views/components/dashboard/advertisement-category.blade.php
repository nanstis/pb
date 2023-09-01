<form method="POST" action="{{route('partners.update', $partner)}}">
    @method('PUT')
    @csrf
    <x-dashboard.card title="advert categories">
        <ul>
            @foreach($categories as $category)
                <li>
                    <x-forms.checkbox name="categories[]" :label="$category[app()->getLocale()]"
                                      value="{{$category->id}}"
                                      :key="$partner->id"
                                      :checked="$activeCategories->has($category->id)"/>

                    <ul class="ml-6">
                        @foreach($category->children as $subCategory)
                            <li>
                                <x-forms.checkbox name="children[]" :label="$subCategory[app()->getLocale()]"
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


