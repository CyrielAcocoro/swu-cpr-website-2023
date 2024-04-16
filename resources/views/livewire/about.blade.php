<main class="bg-white-500 mb-auto">
    <div class="overflow prose prose-slate prose-p:text-lg dark:prose-invert mx-auto max-w-screen-xl">
        <section class="flex justify-center align-center py-24 lg:py-48">
            <div class="flex flex-col items-center justify-center text-center">
                <h1 class="m-0">About</h1>
                @if($programDetails->about)
                <p>
                    {{$programDetails->about}}
                </p>
                @else
                <p>
                    There are no post available at the moment.
                </p>
                @endif
            </div>
        </section>
        <section class="flex flex-col md:flex-row justify-between items-center mx-auto py-16 md:py-18 lg:py-20 gap-4 md:gap-20">
            <div class="order-2 flex flex-col items-center justify-center text-center md:order-1 lg:order-1 ">
                <h1 class="m-0">Mission</h1>
                @if($programDetails->mission)
                <p>
                    {{$programDetails->mission}}
                </p>
                @else
                <p>
                    There are no post available at the moment.
                </p>
                @endif
            </div>
            <img class="w-full md:w-[500px] h-auto order-1 md:order-2 lg:order-2" alt="" src="{{url('/images/missionImage.svg')}}" />
        </section>
        <section class="flex flex-col md:flex-row justify-between items-center mx-auto py-16 md:py-18 lg:py-20 gap-4 md:gap-20 h-auto md:h-4/6 fade-on-scroll">
            <img class="w-full md:w-[500px] h-auto" alt="Vision image" src="{{url('/images/collaborationImage.svg')}}" />
            <div class="flex flex-col items-center justify-center text-center">
                <h1 class="m-0">
                    Vision
                </h1>
                @if($programDetails->vision)
                <p>
                    {{$programDetails->vision}}
                </p>
                @else
                <p>
                    There are no post available at the moment.
                </p>
                @endif
            </div>
        </section>

        <section class="flex flex-col items-center justify-center mx-auto gap-12 py-16 md:py-18 lg:py-20 fade-on-scroll">
            <img class="w-full md:w-96 lg:w-500 h-auto" alt="" src="{{url('/images/meetTheTeamImage.svg')}}" />
            <div class="flex flex-col items-center justify-center text-center">
                <h1 class="m-0">
                    Meet The Team
                </h1>
                <p>
                    Discover the talented student developers who built this IT
                    solution from scratch. Through their dedication and expertise,
                    they created a platform that showcases the innovative works of IT
                    students in Southwestern University - PHINMA
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 grid-rows-2 gap-12">
                <x-developer-card avatar="{{asset('/images/cyriel.png')}}" alt="cyriel" name="Cyriel John Acocoro" role="Full-stack Developer | UX/UI Designer" about="Hello, I’m an IT student at SWU-PHINMA, with a passion for software development and UX/UI design. If you're interested in collaborating on an exciting project, let's make it happen - contact me using this link!" facebookLink="https://www.facebook.com/" showFacebookIcon=true instagramLink="https://www.instagram.com/" showInstagramIcon=true linkedinLink="https://www.linkedin.com/in/cyriel-acocoro/" showLinkedinIcon=true />
                <x-developer-card avatar="{{asset('/images/danica.png')}}" alt="danica" name="Danica Marie Arnaiz" role="Project Manager | Backend Developer" about="I'm an IT student with a versatile skill set covering web, mobile app, and game development. I thrive in leadership roles, handling responsibilities effectively. My keen interest lies in the intersection of business IT and cloud computing, where I envision contributing and excelling in the dynamic landscape of technology and innovation." facebookLink="https://www.facebook.com/nonononoway0" showFacebookIcon=true instagramLink="https://instagram.com/saintdaniiii" showInstagramIcon=true linkedinLink="https://linkedin.com/in/danica-arnaiz" showLinkedinIcon=true />
                <x-developer-card avatar="{{asset('/images/romnee.png')}}" alt="romnee" name="Romnee James Banaay" role="Quality Control" about=" Hi! I'm Romnee James, a perpetual explorer of life's intricacies, a seeker of wisdom in everyday moments, and a passionate advocate for embracing the extraordinary in the ordinary. Join me on a journey through the kaleidoscope of my experiences, where every day is an opportunity to discover something new and meaningful." facebookLink="https://www.facebook.com/" showFacebookIcon=true instagramLink="https://www.instagram.com/" showInstagramIcon=true linkedinLink="https://www.instagram.com/" showLinkedinIcon=true />
                <x-developer-card avatar="{{asset('/images/lj.png')}}" alt="romnee" name="Lauren Jade Cuico Yting" role="Quality Control" about="Hi, I'm an IT student at SWU-PHINMA. I'm passionate about creating scalable and maintainable code that solves real-world problems. If you need help with your web application, let's work together to make it awesome!" facebookLink="https://www.facebook.com/" showFacebookIcon=true instagramLink="https://www.instagram.com/" showInstagramIcon=true linkedinLink="https://www.instagram.com/" showLinkedinIcon=true />
            </div>
        </section>
    </div>
</main>