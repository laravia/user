<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravia</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <!--Replace with your tailwind.css once created-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>


    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>



    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <style>
        #header{z-index:9}
.tags-input {
        display: flex;
        flex-wrap: wrap;
        border-width: 1px;
        border-radius: .50rem;
        padding-left: .5rem;
        padding-right: 1rem;
        padding-top: .5rem;
        padding-bottom: .25rem;
        }

        .tags-input-tag {
        display: inline-flex;
        line-height: 1;
        border:1px solid #ccc;
        align-items: center;
        font-size: .875rem;
        background-color: #eee;
        color: #000;
        border-radius: .50rem;
        user-select: none;
        padding: .25rem;
        margin-right: .5rem;
        margin-bottom: .25rem;
        z-index: 100;
        }

        .tags-input-tag:last-of-type {
        margin-right: 0;
        }

        .tags-input-remove {
        font-size: 1.125rem;
        line-height: 1;
        }

        .tags-input-remove:first-child {
        margin-right: .25rem;
        }

        .tags-input-remove:last-child {
        margin-left: .25rem;
        }

        .tags-input-remove:focus {
        outline: 0;
        }

        .tags-input-text {
        flex: 1;
        outline: 0;
        padding-top: .25rem;
        padding-bottom: .25rem;
        margin-left: .5rem;
        margin-bottom: .25rem;
        min-width: 10rem;
        }

        .py-16 {
        padding-top: 4rem;
        padding-bottom: 4rem;
        }
    </style>

</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    @component('user::components.navi')
    @endcomponent


    <!--Container-->
    <div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            @component('laravia::components.alert')
            @endcomponent

            @yield('content')
        </div>


    </div>
    <!--/container-->

    <footer class="bg-white border-t border-gray-400 shadow">
        <div class="max-w-xl mx-auto py-12">
            <center>made with <i class="fas fa-heart"></i> from me</center>
        </div>
    </footer>

    <script>
        /*backend navi dropdown*/
        /*Toggle dropdown list*/
        /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

        var userMenuDiv = document.getElementById("userMenu");
        var userMenu = document.getElementById("userButton");

        var navMenuDiv = document.getElementById("nav-content");
        var navMenu = document.getElementById("nav-toggle");

        document.onclick = check;

        function check(e) {
            var target = (e && e.target) || (event && event.srcElement);

            //User Menu
            if (!checkParent(target, userMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, userMenu)) {
                    // click on the link
                    if (userMenuDiv.classList.contains("invisible")) {
                        userMenuDiv.classList.remove("invisible");
                    } else { userMenuDiv.classList.add("invisible"); }
                } else {
                    // click both outside link and outside menu, hide menu
                    userMenuDiv.classList.add("invisible");
                }
            }

            //Nav Menu
            if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                    // click on the link
                    if (navMenuDiv.classList.contains("hidden")) {
                        navMenuDiv.classList.remove("hidden");
                    } else { navMenuDiv.classList.add("hidden"); }
                } else {
                    // click both outside link and outside menu, hide menu
                    navMenuDiv.classList.add("hidden");
                }
            }

        }

        function checkParent(t, elm) {
            while (t.parentNode) {
                if (t == elm) { return true; }
                t = t.parentNode;
            }
            return false;
        }
    </script>

</body>

</html>
