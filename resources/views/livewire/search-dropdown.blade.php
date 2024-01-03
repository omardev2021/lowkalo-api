<div class="flex-1 flex items-center justify-center px-2 lg:ml-6 lg:justify-end">
    <div class="max-w-lg w-full lg:max-w-xs">
        <label for="search" class="sr-only">Search for songs</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">

            </div>
            <input wire:model.debounce.300ms="search"

                   id="search"
                   class="form-control w-70"
                   placeholder=" {{ __('messages.services7') }}" type="search" autocomplete="off">
            @if (strlen($search) > 1)
                <ul
                    class="absolute z-50 bg-white border border-gray-300 w-full rounded-md mt-2 text-gray-700 text-sm divide-y divide-gray-200">
                    @forelse ($searchResults as $result)
                        <li style="list-style: none">
                            <a



                                href="{{route('service.details',$result)}}"

                                class="flex items-center px-4 py-4 hover:bg-gray-200 transition ease-in-out duration-150">
                                <img src="{{ asset('frontend/images/pexels-ron-lach-8879381_bi0fad.webp') }}"
                                     alt="album art" class="img-fluid w-25">
                                <div class="ml-4 leading-tight">
                                    <div class="font-semibold">



                                                    {{ $result['name_ar'] }}



                                    </div>
                                    <div class="text-gray-600">

                                            {{ $result['name'] }}


                                    </div>
                                </div>
                            </a>
                        </li>
                    @empty
                        @if (Config::get('app.locale') == 'en')
                            <li class="px-4 py-4">No results found for "{{ $search }}"</li>
                        @elseif(Config::get('app.locale') == 'ar')
                            <li class="px-4 py-4">لا توجد نتائج بالعنوان "{{ $search }}"</li>
                        @endif

                    @endforelse


                </ul>
            @endif
        </div>
    </div>
</div>
