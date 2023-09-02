<form method="GET" action="{{route('advertisements.index')}}">
    <x-forms.button>
        Filter
    </x-forms.button>
    <ul class="mt-4">
        @foreach($categories as $category)
            <li>
                @php
                    $checkedCategories = \Illuminate\Support\Facades\Request::input('categories');
                    $checkedChildren = \Illuminate\Support\Facades\Request::input('children');
                @endphp
                <x-forms.checkbox name="categories[]" :label="$category[app()->getLocale()]"
                                  value="{{$category->id}}"
                                  :checked="$checkedCategories && in_array($category->id, $checkedCategories)"/>
                <ul class="ml-6">
                    @foreach($category->children as $subCategory)
                        <li>
                            <x-forms.checkbox name="children[]" :label="$subCategory[app()->getLocale()]"
                                              value="{{$subCategory->id}}"
                                              :checked="$checkedChildren && in_array($subCategory->id, $checkedChildren)"/>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</form>



