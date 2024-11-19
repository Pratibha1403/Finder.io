<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Suitable Jobs and get Hired!</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body >
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-black/10">
            <div>
                <a href="/"><img class="w-[100px]" src="{{Vite::asset('resources/images/logo.svg')}}" alt=""></a>
            </div>
            <div class="space-x-6 font-bold ">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
            <div>
                Post a Job
            </div>
        </nav>
        <main class="mt-10 max-w-[900px] mx-auto">
            {{$slot}}
        </main>
    </div>
</body>
</html>