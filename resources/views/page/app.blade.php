<!doctype html>
<html class="scroll-smooth">

<head>
    <meta charset="UTF-8">
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
    <title>Resume Heni R</title>
</head>

<body class="bg-color1">

    @if (session()->has('message'))
    <div id="confirmation" class="fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center h-screen pt-4 px-4 pb-20 text-center">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <span class="sm:inline-block sm:align-middle sm:h-screen"></span>&#8203;

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <h3 class="text-xl leading-6 font-medium text-gray-900">
                        Message
                    </h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500">
                            {{ session()->get('message') }}
                        </p>
                    </div>
                </div>
                <div class="bg-white px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button id="allow" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif

    <nav class="z-50 fixed w-full opacity-80 bg-white">
        <div class="flex items-center justify-between px-14 py-4 text-base font-light shadow-md">
            <div></div>
            <div class="flex items-center">
                <a href="#about" class="mr-4">About</a>
                <a href="#skill" class="mr-4">Skills</a>
                <a href="#education" class="mr-4">Education</a>
                <a href="#experience" class="mr-4">Experience</a>
                <a href="#portofolio" class="mr-4">Portofolio</a>
            </div>
            @auth
            <form method="POST" action="/logout">
                @csrf
                <a href="" onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    Log Out
                </a>
            </form>
            @else
            <div>
            </div>
            @endauth
        </div>
    </nav>

    <div id="about" class="mx-36 px-10 pt-16 shadow-xl absolute mt-14 bg-white z-0">
        <!-- about -->
        <div class="grid grid-cols-3 gap-4 items-center">
            <div class="shadow-xl p-2 mr-auto">
                <img class="object-center" src="img/pp.jpg" alt="" width="200">
            </div>
            <div class="col-span-2">
                <h1 class="font-bold text-5xl mb-1">Heni Rosdianti</h1>
                <p class="mb-6">Mahasiswa Aktif & E-Commerce Specialist</p>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 my-10">
            <div>
                <h2 class="font-bold text-2xl">About Me</h2>
                <p class="mt-10">Heni Rosdianti adalah Seorang yang
                    berpengalaman dalam bidang marketing
                    digital, khususnya di marketplace dan sosial
                    media. Dengan lebih dari 4 tahun
                    pengalaman dalam industri marketing
                    digital ia telah berhasil membantu
                    meningkatkan visibilitas dan penjualan
                    produk yang berkembang pesat dengan
                    rate penjualan tertinggi pada perusahaan secara online.</p>
            </div>
            <div class="grid grid-cols-3 items-center pl-10">
                <div>
                    <div>LinkedIn</div>
                    <div>Email</div>
                    <div>Phone</div>
                    <div>Address</div>
                </div>
                <div class="col-span-2">
                    <div>Heni Rosdianti</div>
                    <div>hrosdianti11@gmail.com</div>
                    <div>+62 857-0386-0267</div>
                    <div>Ciawi, Tasikmalaya 46156</div>
                </div>
            </div>
        </div>
        <hr>
        <!-- skill -->
        <div id="skill" class="my-10">
            <div class="flex justify-center">
                <h2 class="font-bold text-2xl">Soft, Hard, & Language Skill</h2>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-4">
                <div class="mr-8">
                    <div class="mt-2">
                        <div>Komunikasi</div>
                        <div class="bg-color3/20 h-4 rounded-full">
                            <div class="bg-color3 h-full w-[90%] flex items-center justify-center text-white text-xs">90%</div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>Problem Solving</div>
                        <div class="bg-color3/20 h-4 rounded-full">
                            <div class="bg-color3 h-full w-[80%] flex items-center justify-center text-white text-xs">80%</div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>Manajemen Waktu</div>
                        <div class="bg-color3/20 h-4 rounded-full">
                            <div class="bg-color3 h-full w-[85%] flex items-center justify-center text-white text-xs">85%</div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>Negosiasi</div>
                        <div class="bg-color3/20 h-4 rounded-full">
                            <div class="bg-color3 h-full w-[87%] flex items-center justify-center text-white text-xs">87%</div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>Leadership</div>
                        <div class="bg-color3/20 h-4 rounded-full">
                            <div class="bg-color3 h-full w-[85%] flex items-center justify-center text-white text-xs">85%</div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>Kolaborasi Tim</div>
                        <div class="bg-color3/20 h-4 rounded-full">
                            <div class="bg-color3 h-full w-[85%] flex items-center justify-center text-white text-xs">85%</div>
                        </div>
                    </div>
                </div>
                <div class="ml-8">
                    <div class="mt-2">
                        <div>E-Commerce</div>
                        <div class="bg-color2/20 h-4 rounded-full">
                            <div class="bg-color2 h-full w-[88%] flex items-center justify-center text-white text-xs">88%</div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>Copy Writing</div>
                        <div class="bg-color2/20 h-4 rounded-full">
                            <div class="bg-color2 h-full w-[80%] flex items-center justify-center text-white text-xs">80%</div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>Sosial Media Marketing</div>
                        <div class="bg-color2/20 h-4 rounded-full">
                            <div class="bg-color2 h-full w-[80%] flex items-center justify-center text-white text-xs">80%</div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>Seo & Sem</div>
                        <div class="bg-color2/20 h-4 rounded-full">
                            <div class="bg-color2 h-full w-[80%] flex items-center justify-center text-white text-xs">80%</div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>B. Indonesia</div>
                        <div class="bg-color2/20 h-4 rounded-full">
                            <div class="bg-color2 h-full w-[100%] flex items-center justify-center text-white text-xs">Native</div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <div>B. Inggris</div>
                        <div class="bg-color2/20 h-4 rounded-full">
                            <div class="bg-color2 h-full w-[100] flex items-center justify-center text-white text-xs">Intermediate</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <!-- education -->
        <div id="education" class="my-10">
            <div class="flex justify-center">
                <h2 class="font-bold text-2xl">Education</h2>
            </div>

            @auth
            <a class="underline text-sky-600 hover:text-black" href="/viewAddEducation">+Add Education</a>
            @endauth

            @foreach ($education as $e)
            <div class="border-l-4 border-cyan-600/20 ml-3 py-8">
                <div class="relative">
                    <div class="absolute top-5 -left-3.5 bg-color2 h-6 w-6 rounded-full border-4 border-white"></div>
                    <div class="pl-10 w-[500px]">
                        <div class="font-bold text-xl">{{$e->title}}</div>
                        <div class="text-sm break-words">{{$e->description}}l</div>

                        @auth
                        <a class="underline text-sky-600 hover:text-black text-sm" href="{{url('delEducation', $e->id)}}">-Delete</a>
                        @endauth

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <hr>
        <!-- experience -->
        <div id="experience" class="my-10">
            <div class="flex justify-center">
                <h2 class="font-bold text-2xl">Experience</h2>
            </div>

            @auth
            <a class="underline text-sky-600 hover:text-black" href="/viewAddExperience">+Add Experience</a>
            @endauth

            @foreach ($experience as $x)
            <div class="border-l-4 border-cyan-600/20 ml-3 py-8">
                <div class="relative">
                    <div class="absolute top-5 -left-3.5 bg-cyan-600 h-6 w-6 rounded-full border-4 border-white"></div>
                    <div class="pl-10 w-[500px]">
                        <div class="font-bold text-xl">{{$x->title}}</div>
                        <div class="text-base">{{$x->subtitle}}</div>
                        <div class="text-sm break-words">{{$x->description}}</div>

                        @auth
                        <a class="underline text-sky-600 hover:text-black text-sm" href="{{url('delExperience', $x->id)}}">-Delete</a>
                        @endauth

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <hr>
        <!-- portofolio -->
        <div id="portofolio" class="my-10">
            <div class="flex justify-center">
                <h2 class="font-bold text-2xl">Portofolio</h2>
            </div>

            @auth
            <a class="underline text-sky-600 hover:text-black" href="/viewAddPortofolio">+Add Portofolio</a>
            @endauth

            <div class="flex flex-wrap justify-center">
                @foreach ($portofolio as $p)
                <div class="group h-96 w-96 [perspective:1000px] m-6">
                    <div class="relative h-full w-full rounded-xl shadow-xl transition-all duration-500 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                        <div class="absolute inset-0">
                            <img class="h-full w-full rounded-xl object-cover shadow-lg" src="portofolio/{{$p->image}}">
                        </div>
                        <div class="absolute inset-0 h-full w-full rounded-xl bg-black/40 px-12 text-center text-slate-200 [transform:rotateY(180deg)] [backface-visibility:hidden]">
                            <div class="flex min-h-full flex-col items-center justify-center">
                                <div class="text-3xl font-semibold">{{$p->title}}</div>
                                <div class="text-lg mb-2">{{$p->subtitle}}</div>
                                <div class="text-sm">{{$p->description}}</div>

                                @auth
                                <a class="underline text-sky-600 hover:text-black text-sm" href="{{url('delPortofolio', $p->id)}}">-Delete</a>
                                @endauth

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <hr>
        <hr>
        <!-- discuss -->
        <section class="py-8 my-10 antialiased">
            <div class="max-w-2xl mx-auto px-4">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-lg font-bold">Discussion ({{$countDiscus}})</h2>
                </div>
                <form class="mb-6" action="{{url('/addDiscus')}}" method="POST">
                    @csrf
                    <div class="py-2 px-4 mb-4 rounded-lg rounded-t-lg border border-gray-200">
                        <label for="comment" class="sr-only">Your comment</label>
                        <input type="text" name="name" class="px-0 w-full text-sm border-0 focus:ring-0 focus:outline-none" placeholder="name" required>
                    </div>
                    <div class="py-2 px-4 mb-4 rounded-lg rounded-t-lg border border-gray-200">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea name="comment" rows="6" class="px-0 w-full text-sm border-0 focus:ring-0 focus:outline-none" placeholder="Write a comment..." required></textarea>
                    </div>
                    <button type="submit" class="inline-flex items-center text-white py-2.5 px-4 text-xs font-medium text-center bg-color2 rounded-lg focus:ring-4 focus:ring-primary-200 hover:bg-color2/80">
                        Post comment
                    </button>
                </form>
                @foreach ($discus as $d)
                <article class="p-6 text-base rounded-lg">
                    <footer class="flex justify-between items-center mb-2">
                        <div class="flex items-center">
                            <p class="inline-flex items-center mr-3 text-sm font-semibold">{{$d->name}}</p>
                            <p class="text-sm "><time pubdate datetime="2022-02-08" title="February 8th, 2022">{{$d->created_at}}</time></p>
                        </div>
                    </footer>
                    <p class="">{{$d->comment}}</p>

                    @auth
                    <a class="underline text-sky-600 hover:text-black text-sm" href="{{url('delDiscus', $d->id)}}">-Delete</a>
                    @endauth

                </article>
                <hr>
                @endforeach
            </div>
        </section>
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

        const modal = document.getElementById("confirmation");

        document.addEventListener("click", (e) => {
            if (e.target.id === "openModal") {
                modal.classList.remove("hidden");
            } else if (e.target.id === "allow" || e.target.id === "deny") {
                modal.classList.add("hidden");
            }
        });
    </script>
</body>

</html>