<footer class="bg-dark_gray-400 mt-auto md:flex ">
  <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
      <div>
        <div class="flex flex-row justify-start items-center">
          <<img src="{{ url('/images/cite-logo.png') }}" alt="University Logo" class="px-2 h-6 sm:h-9">
          <div class="flex flex-col">
            <b class="text-white-400 text-lg">Southwestern University - PHINMA</b>
            <div class="text-white-400 text-base">College of Information Technology</div>
          </div>
        </div>
        <p class="max-w-xs mt-4 text-base text-white-400">
          SWU-CPR serves as an esteemed repository dedicated to showcasing the projects undertaken by the Information Technology students of Southwestern University - PHINMA
        </p>
        <div class="flex flex-row mt-8 space-x-6 text-white-400-400">
          <span class='social-media-buttons'>
            <a class='social-media-button' target="_blank" href="https://www.instagram.com/swuphinma">
              <img alt="Instagram" src="/images/instagramFooterIcon.svg" />
            </a>
            <a class='social-media-button' target="_blank" href="https://twitter.com/swuphinma">
              <img alt="Twitter" src="/images/twitterFooterIcon.svg" />
            </a>
            <a class='social-media-button' target="_blank" href="https://www.youtube.com/channel/UCJQdhAhWi9Ws1GVlnN7193g">
              <img alt="Youtube" src="/images/youtubeFooterIcon.svg" />
            </a>
            <a class='social-media-button' target="_blank" href="https://www.linkedin.com/school/swuph/">
              <img alt="LinkedIn" src="/images/linkedinFooterIcon.svg" />
            </a>
          </span>
        </div>
      </div>
      <div class="grid grid-cols-1 gap-8 lg:col-span-2 sm:grid-cols-2 lg:grid-cols-4">
        <div>
          <p class="font-medium text-lg text-white-400">
            Pages
          </p>
          <nav class="flex flex-col mt-4 space-y-2 text-base text-white-400">
            <a class="hover:text-yellow-400" href="/" wire:navigate> Home </a>
            <a class="hover:text-yellow-400" href="/project" wire:navigate> Projects </a>
            <a class="hover:text-yellow-400" href="/faculty" wire:navigate> Faculty </a>
            <a class="hover:text-yellow-400" href="/student-developer" wire:navigate> Students </a>
            <a class="hover:text-yellow-400" href="/about" wire:navigate> About </a>
          </nav>
        </div>
        <div>
          <p class="font-medium text-lg text-white-400">
            Links
          </p>
          <nav class="flex flex-col mt-4 space-y-2 text-base text-white-400">
            <a class="hover:text-yellow-400" target="_blank" href="https://swu.phinma.edu.ph/"> SWU-PHINMA Official Website </a>
            <a class="hover:text-yellow-400" target="_blank" href="https://www.facebook.com/groups/swuphinmastudentcommunity"> SWU-PHiNMA Student Life </a>
          </nav>
        </div>
        <div>
          <p class="font-medium text-lg text-white-400">
            Admin Portal
          </p>
          <nav class="flex flex-col mt-4 space-y-2 text-base text-white-400">
            <a class="hover:text-yellow-400" target="_blank" href="http://127.0.0.1:8001/"> SWU-CPR Admin Portal </a>
          </nav>
        </div>
        <div>
          <p class="font-medium text-lg text-white-400">
            Legal
          </p>
          <nav class="flex flex-col mt-4 space-y-2 text-base text-white-400">
            <a class="hover:text-yellow-400" href="/privacypolicy" wire:navigate> Privacy Policy </a>
          </nav>
        </div>
      </div>
    </div>
    <p class="mt-8 text-xs text-white-400">
      © 2023 SWU-CPR
    </p>
  </div>
</footer>