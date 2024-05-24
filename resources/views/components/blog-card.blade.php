{{-- propos --}}
@props(['blogPost'])
@php
    use Carbon\Carbon;

    $blogPostedAt = Carbon::parse($blogPost->created_at)->shortRelativeDiffForHumans();
    $blogCategory = $blogPost
        ->categories()
        ->whereIn('level', [3, 2, 1])
        ->orderBy('level', 'desc')
        ->value('title');
@endphp
<div>
    <div class="">
        {{-- <img class="w-full object-cover" src="./images/cf05de8e78e0 2.png" alt="" /> --}}
        <img class="w-full object-cover" src="{{ asset('storage/' . $blogPost->image) }}" alt="" />
        <div class="bg-[#301200] border-2 border-transparent hover:border-[#752D00] rounded max-w-[90%] w-full mx-auto -mt-12 relative px-4 py-6"
            style="box-shadow: 0px 4px 40px rgba(117, 45, 0, 0.3)">
            <div class="space-y-2">
                <h2 class="text-[#F8E7CF] text-lg font-roboto line-clamp-1">
                    What is a leather field jacket and its ...
                    {{ ___(\Illuminate\Support\Str::limit($blogPost->title ?? '...', 40)) }}
                </h2>
                <div class="flex justify-between items-center gap-3">
                    <p class="text-[#C65B1A] text-base font-roboto flex justify-start items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
                            fill="none" class="w-4 h-4 mt-1">
                            <path
                                d="M16.71 4.0425L14.37 6.3725L10.62 2.6225L12.96 0.2925C13.35 -0.0975 14 -0.0975 14.37 0.2925L16.71 2.6325C17.1 3.0025 17.1 3.6525 16.71 4.0425ZM0 13.2525L10.06 3.1825L13.81 6.9325L3.75 17.0025H0V13.2525ZM13.62 1.0425L12.08 2.5825L14.42 4.9225L15.96 3.3825L13.62 1.0425ZM12.36 7.0025L10 4.6425L1 13.6625V16.0025H3.34L12.36 7.0025Z"
                                fill="#C65B1A" />
                        </svg>
                        {{ ___(\Illuminate\Support\Str::limit($blogCategory ?? '...', 10)) }}
                    </p>
                    <p class="text-[#C65B1A] text-base font-roboto flex justify-start items-start gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20"
                            fill="none" class="w-4 h-4 mt-1">
                            <path
                                d="M11.6667 2.89474V1M11.6667 2.89474V4.78947M11.6667 2.89474H7.66667M1 8.57895V17.1053C1 17.6078 1.1873 18.0897 1.5207 18.445C1.8541 18.8004 2.30628 19 2.77778 19H15.2222C15.6937 19 16.1459 18.8004 16.4793 18.445C16.8127 18.0897 17 17.6078 17 17.1053V8.57895M1 8.57895H17M1 8.57895V4.78947C1 4.28696 1.1873 3.80502 1.5207 3.44969C1.8541 3.09436 2.30628 2.89474 2.77778 2.89474H4.55556M17 8.57895V4.78947C17 4.28696 16.8127 3.80502 16.4793 3.44969C16.1459 3.09436 15.6937 2.89474 15.2222 2.89474H14.7778M4.55556 1V4.78947"
                                stroke="#C65B1A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        {{ ___(\Illuminate\Support\Str::limit($blogPostedAt, 10)) }}

                    </p>
                </div>
            </div>
            <p class="text-[#F8E7CF] text-base font-normal leading-7 mt-3 font-roboto">
                {{ ___(\Illuminate\Support\Str::limit($blogPost->description, 100)) }}
            </p>
            <div class="mt-4 text-center">
                <a href="{{ route('blogs.post', $blogPost->slug) }}"
                    class="text-base bg-transparent border border-[#C65B1A] text-primary rounded-md uppercase py-3 px-5 inline-block hover:bg-[#C65B1A]">read
                    more</a>
            </div>
        </div>
    </div>
</div>
