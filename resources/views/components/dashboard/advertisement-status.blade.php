<div class="border border-gray-300 rounded-sm shadow-sm">
    <section title="status-header" class="p-5 font-ibm">
        <h6 class="mb-2 font-semibold text-lg">
            {{strtoupper('Publication Status')}}
        </h6>

        <div class="inline-flex items-center">
            @if($advertisement && !$isTrashed)
                <h3 class="text-success text-sm mr-1.5">Published</h3>
                <p>
                        <span class="text-xs">
                                since {{$advertisement->created_at->format('d/m/Y H:m')}}
                        </span>
                </p>
            @endif

            @if($isTrashed)
                <h3 class="text-danger text-sm mr-1.5">Unlisted</h3>
                <p>
                        <span class="text-xs">
                                since {{$advertisement->deleted_at->format('d/m/Y H:m')}}
                        </span>
                </p>
            @endif
        </div>
    </section>

    <section title="status-actions">
        <div class="flex content-center border-t border-t-gray-300">
            @if(!$advertisement && !$isTrashed)
                <form method="POST" action="{{route('advertisements.store')}}" class="flex w-full">
                    @csrf
                    <input type="hidden" name="partner_id" value="{{$partner->id}}">
                    <button type="submit" class="text-sm text-success w-full p-2 hover:underline">
                        Publish for the first time
                    </button>
                </form>
            @elseif($isTrashed)
                <form method="POST" action="{{route('advertisements.restore', $advertisement)}}" class="flex w-full">
                    @method('PATCH')
                    @csrf
                    <button type="submit" class="text-sm text-success w-full p-2 hover:underline">
                        Activate Listing
                    </button>
                </form>
            @elseif($advertisement)
                <form method="POST" action="{{route('advertisements.destroy', $advertisement)}}"
                      class="flex w-full">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="text-sm text-danger w-full p-2 hover:underline">
                        Disable
                    </button>
                </form>
            @endif
        </div>
    </section>
</div>
