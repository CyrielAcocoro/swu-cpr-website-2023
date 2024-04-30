<main class="bg-white-500 mb-0">
    <div class="overflow prose-slate prose-p:text-md dark:prose-invert mx-auto ">
        <div id="facultyElement" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 grid-rows-2 gap-12 py-12 mx-auto max-w-screen-2xl">
            @foreach ($studentDev as $studentDeveloper)
            <x-student-card full-name="{{ $studentDeveloper->full_name }}" email="{{ $studentDeveloper->email }}" city="{{ $studentDeveloper->city }}" province="{{ $studentDeveloper->province }}" country="{{ $studentDeveloper->country }}" image="{{ config('app.custom.virtual_directory_base_url') . 'admin-images/' . $studentDeveloper->image) }}" githubLink="{{$studentDeveloper->github}}" linkedinLink="{{$studentDeveloper->linkedin}}" />
            @endforeach
        </div>
    </div>
</main>