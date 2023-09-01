@unless ($breadcrumbs->isEmpty())
    <nav class="flex bg-white shadow-lg fixed w-full p-4 z-30" aria-label="Breadcrumb">
        <ol role="list" class="breadcrumb flex items-center space-x-4">
            @foreach ($breadcrumbs as $breadcrumb)
                @if (!is_null($breadcrumb->url) && !$loop->last)
                    @if($breadcrumb->title === 'Home')
                        <li class="breadcrumb-item">
                            <div>
                                <a href="{{ $breadcrumb->url }}" class="text-primary">
                                    <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20"
                                         fill="currentColor"
                                         aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                    <span class="sr-only">{{ $breadcrumb->title }}</span>
                                </a>
                            </div>
                        </li>
                    @else
                        <li class="breadcrumb-item">
                            <div class="flex items-center">
                                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                          clip-rule="evenodd"/>
                                </svg>

                                <a href="{{ $breadcrumb->url }}"
                                   class="ml-4 text-sm font-medium text-primary hover:underline"
                                   aria-current="page">
                                    {{ $breadcrumb->title }}
                                </a>
                            </div>
                        </li>
                    @endif
                @else
                    <li class="breadcrumb-item active">
                        <div class="flex items-center">
                            <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                 aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <p
                                class="ml-4 text-sm font-medium text-gray-600 underline"
                                aria-current="page">
                                {{ $breadcrumb->title }}
                            </p>
                        </div>
                    </li>
                @endif
            @endforeach
        </ol>
    </nav>
@endunless
