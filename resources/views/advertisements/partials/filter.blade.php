<form method="GET" action="{{route('advertisements.index')}}">
    <fieldset>
        <legend class="text-base font-semibold text-gray-900">CATEGORIES</legend>
        <div class="mt-4 divide-y divide-gray-200 border-b border-t border-gray-200">

            <ul>
                @foreach($categories as $key => $category)
                    <li>
                        <a href="{{route('advertisements.category', $category)}}">
                            {{$category[app()->getLocale()]}}
                        </a>
                    </li>

                    <ul>
                        @foreach($category->children as $item)
                            <li class="ml-8">
                                <a href="{{route('advertisements.categoryChild', [
                                'category' => $category,
                                'categoryChild' => $item])}}">
                                    {{$item[app()->getLocale()]}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            </ul>

        </div>
        <button id="submit" type="submit">
            Submit
        </button>
    </fieldset>
</form>





