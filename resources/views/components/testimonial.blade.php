<div class="bg-white-500 w-full inline-flex flex-nowrap overflow-hidden py-8">
    <ul class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
        @foreach($testimonials as $testimonial)
        <li>
            <img src="{{asset('/admin-images/' . $testimonial->image)}}" width="400px" height="400px" alt="Facebook" />
        </li>
        @endforeach
    </ul>
    <ul class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll" aria-hidden="true">
        @foreach($testimonials as $testimonial)
        <li>
            <img src="{{asset('/admin-images/' . $testimonial->image)}}" width="400px" height="400px" alt="Facebook" />
        </li>
        @endforeach
    </ul>
</div>