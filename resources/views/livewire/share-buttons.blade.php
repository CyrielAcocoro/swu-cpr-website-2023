<div class="fixed z-40 left-0 top-1/3 transform -translate-y-1/2">
    <ul class="flex flex-col gap-1 p-0 m-1.5">
        @foreach($this->shareLinks as $platform => $link)
        <a href="{{ $link }}" target="_blank" class="flex items-center justify-center p-2 rounded {{ $platform }}-button" aria-label="Share on {{ ucfirst($platform) }}">
            @if ($platform === 'facebook')
            <i class="fab fa-facebook-f text-white-400 text-lg"></i>
            @elseif ($platform === 'twitter')
            <i class="fab fa-twitter text-white-400 text-lg"></i>
            @elseif ($platform === 'linkedin')
            <i class="fab fa-linkedin-in text-white-400 text-lg"></i>
            @elseif ($platform === 'reddit')
            <i class="fab fa-brands fa-reddit-alien text-white-400 text-lg"></i>
            @elseif ($platform === 'whatsapp')
            <i class="fab fa-whatsapp text-white-400 text-lg"></i>
            @elseif ($platform === 'pinterest')
            <i class="fab fa-brands fa-pinterest-p text-white-400 text-lg"></i>
            @endif
        </a>
        @endforeach
    </ul>
</div>