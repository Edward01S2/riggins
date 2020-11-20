<div id="hero" class="{{ $block->classes }}">
  <div class="relative z-30 h-full bg-black bg-center bg-cover pt-28 -mt-36 md:-mt-48 md:pt-48" style="background-image:url('{!! $bg['url'] !!}')">
    <div class="container relative z-30 px-4 mx-auto sm:px-6 lg:px-8">
      <div class="relative z-30 py-12 lg:pb-0">
        <img class="block w-3/4 mx-auto mb-12 md:w-1/2 lg:max-w-sm" src="{!! $logo['url'] !!}" alt="">
        <div class="flex flex-col items-center space-y-4 md:flex-row md:space-y-0 md:space-x-6 md:justify-center">
          <a class="inline-flex items-center justify-center w-48 px-6 py-3 text-white transition duration-300 bg-c-red-100 hover:opacity-75" href="{!! $youtube['url'] !!}" target="_blank">
            <svg class="w-6 h-6 mr-2 text-white fill-current md:w-7 md:h-7" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>YouTube icon</title><path d="M23.495 6.205a3.007 3.007 0 0 0-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 0 0 .527 6.205a31.247 31.247 0 0 0-.522 5.805 31.247 31.247 0 0 0 .522 5.783 3.007 3.007 0 0 0 2.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 0 0 2.088-2.088 31.247 31.247 0 0 0 .5-5.783 31.247 31.247 0 0 0-.5-5.805zM9.609 15.601V8.408l6.264 3.602z"/></svg>
            <span class="mt-1">{!! $youtube['title'] !!}</span>
          </a>
          <a class="inline-flex items-center justify-center transition duration-300 hover:opacity-75" href="{!! $apple['url'] !!}" target="_blank">
            <img class="w-48 h-auto" src="@asset('images/apple_badge.svg')" alt="">
          </a>
        </div>
      </div>
    </div>
    <div class="absolute inset-0 z-20 w-full h-full black-gradient"></div>
    
  </div>

  <div class="absolute left-0 right-0 z-30 flex justify-center mx-auto space-x-2 chevron-container">
    <div class="w-2 bg-white lg:w-4"></div>
    <div class="p-1 bg-c-red-100">
      <svg class="w-8 h-8 text-white fill-current lg:h-10 lg:w-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
      </svg>
    </div>
    <div class="w-2 bg-white lg:w-4"></div>
  </div>

  <div class="relative z-20 w-full h-24 -mt-16 overflow-hidden md:h-56 md:-mt-40 lg:-mt-24 xl:-mt-16">
    <div class="bg-black bg-top oval-header"></div>
  </div>

  <div class="container relative z-40 px-4 mx-auto sm:px-6 lg:px-8">
    <img class="absolute bottom-0 right-0 z-40 hidden -mb-12 -mr-12 h-96 md:block lg:h-108 xl:mr-20 xl:h-112 xl:-mb-24" src="{!! $image['url'] !!}" alt="">
  </div>

</div>

