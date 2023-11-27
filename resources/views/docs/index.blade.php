<x-layout>

    <main class="relative px-4 pt-16 mx-auto mb-64 max-w-7xl">
        @include('docs.navigation')

        <div class="lg:pl-[20rem] lg:pt-4">
            <div class="max-w-3xl mx-auto xl:max-w-none xl:ml-0 xl:mr-[15.5rem] xl:pr-16">

                <div class="text-5xl font-bold tracking-tight mb-4 text-[#00aaa6]">
                    {{$title}}
                </div>

                @if (count($tableOfContents) > 0)
                    <ul class="mt-8 space-y-2">
                        @foreach($tableOfContents as $item)
                            <li class="@if($item['level'] == 2) before:content-['#']  font-medium text-gray-800 dark:text-gray-200 @else before:content-['##'] @endif before:text-[#00aaa6] @if($item['level'] == 3) ml-4 @endif">
                                <a href="#{{ $item['anchor'] }}">{{ $item['title'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif

                <div class="mt-12 prose dark:prose-invert w-max">
                    {!! $content !!}
                </div>
            </div>
        </div>
    </main>


</x-layout>
