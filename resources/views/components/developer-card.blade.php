<div class="flex flex-col p-8 items-center justify-start rounded-lg bg-white shadow-xl prose prose-p:text-center dark:prose-invert">
  <img class="rounded-full w-36 h-36 overflow-hidden shrink-0 object-cover" alt="{{ $alt }}" src="{{$avatar}}" />
  <div class="flex flex-col items-center justify-center">
    <h3 class="font-medium m-0 text-xl">{{$name}}</h3>
    <p class="leading-6 text-dimgray-300 w-max text-lg m-0 font-medium">{{$role}}</p>
  </div>
  <p class="flex flex-grow text-justify">
    {{$about}}
  </p>
  <div class="flex flex-row items-center m-0 justify-center gap-12">
    @if ($showFacebookIcon)
    <a href="{{$facebookLink}}" target="_blank" class="m-0 transform transition duration-500 hover:scale-125">
      <img alt="facebook Icon" src="/images/facebookIcon.svg" class="m-0" width=28 />
    </a>
    @endif
    @if ($showInstagramIcon)
    <a href="{{$instagramLink}}" target="_blank" class="m-0 transform transition duration-500 hover:scale-125">
      <img alt="Instagram Icon" src="/images/instagramIcon.svg" class="m-0" width=28 />
    </a>
    @endif
    @if ($showLinkedinIcon)
    <a href="{{$linkedinLink}}" target="_blank" class="m-0 transform transition duration-500 hover:scale-125">
      <img alt="LinkedIn Icon" src="/images/linkedinIcon.svg" class="m-0" width=36 />
    </a>
    @endif
  </div>
</div>