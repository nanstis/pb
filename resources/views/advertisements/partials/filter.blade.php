<form method="GET" action="{{route('advertisements.index')}}">
    <x-forms.button>
        Filter
    </x-forms.button>
    <ul class="mt-4">
        @foreach($categories as $category)
            <li>
                <x-forms.checkbox name="categories[]" :label="$category[app()->getLocale()]"
                                  value="{{$category->id}}"/>
                <ul class="ml-6">
                    @foreach($category->children as $subCategory)
                        <li>
                            <x-forms.checkbox name="children[]" :label="$subCategory[app()->getLocale()]"
                                              value="{{$subCategory->id}}"/>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</form>



