<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/app.css">
    <style type="text/tailwindcss">
        @layer base {
        html {
            font-family: "roboto";
            color: rgb(67, 74, 84);
        }
    }
  </style>

    <title>Resume | Add Portofolio</title>
</head>

<body>
    <nav class="z-50 fixed w-full opacity-80 bg-white">
        <div class="flex items-center justify-center px-14 py-4 text-base font-light shadow-md">
            <div class="flex items-center">
                <a href="/" class="mr-4">About</a>
                <a href="/" class="mr-4">Skills</a>
                <a href="/" class="mr-4">Education</a>
                <a href="/" class="mr-4">Experience</a>
                <a href="/" class="mr-4">Portofolio</a>
            </div>
            {{-- @if (Route::has('login'))
            <div class="">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
                @endauth
            </div>
            @endif --}}
        </div>
    </nav>

    <div class="mx-36 px-10 pt-16 shadow-xl top-16 flex flex-col justify-center items-center">
        <div class="font-semibold text-3xl my-10">Add Portofolio</div>
        <form class="w-96 mb-10" action="{{url('/addPortofolio')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Title
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="title" id="title" placeholder="Title" required>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Sub Title
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="subtitle" id="subtitle" placeholder="sub title" required>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Description
                    </label>
                    <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" name="description" id="description" placeholder="description" required> </textarea>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Upload Image
                    </label>
                    <input type="file" name="image" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required>
                </div>
            </div>
            <div class="flex items-center justify-end">
                <button class="bg-color2 hover:bg-color2/80 text-white py-2 px-4 rounded-xl focus:outline-none focus:shadow-outline" type="submit">
                    Submit
                </button>
            </div>
        </form>
    </div>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        roboto: ["roboto"],
                    },
                    backgroundColor: {
                        color1: "#f5f7fa",
                        color2: "#37bc9b",
                        color3: "#4a89dc",
                    },
                },
            },
        }
        </script>
</body>

</html>