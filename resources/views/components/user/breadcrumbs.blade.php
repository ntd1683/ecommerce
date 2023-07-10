@if (count($breadcrumbs))
    <div class="py-9 bg-gray-light">
        <div class="container">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-12">
                    <nav>
                        <ul class="flex flex-wrap items-center justify-center">
                            @foreach ($breadcrumbs as $breadcrumb)
                                @if ($breadcrumb->url && !$loop->last)
                                    <li class="mr-5"><a href="{{ $breadcrumb->url }}"
                                                        class="text-dark font-medium text-base uppercase transition-all hover:text-orange relative before:w-5 before:h-1px before:empty before:absolute before:top-3 before:bg-dark before:transform before:rotate-115 before:-right-5">{{ $breadcrumb->title }}</a>
                                    </li>
                                @else
                                    <li class="text-dark font-medium text-base uppercase mr-5">{{ $breadcrumb->title }}</li>
                                @endif
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endif
