<nav id="header" class="bg-white fixed w-full z-1 top-0 shadow">


    <div class="w-full container mx-auto flex flex-wrap items-center mt-0 pt-3 pb-3 md:pb-0">

        <div class="w-1/2 pl-2 md:pl-0">
            <a class="text-gray-900 text-base xl:text-xl no-underline hover:no-underline font-bold" href="/">
                <i class="fas fa-sun text-pink-600 pr-3"></i> {{Laravia::trans('core.appTitle')}}
            </a>
        </div>
        <div class="w-1/2 pr-0">
            <div class="flex relative inline-block float-right">

                <div class="relative text-sm">
                    <button id="userButton" class="flex items-center focus:outline-none mr-3">

                        <span class="hidden md:inline-block">
                            @if(Auth::user())
                                {{auth()->user()->name}}
                            @endif
                        </span>

                        <svg class="pl-2 h-2" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 129 129">
                            <g>
                                <path d="m121.3,34.6c-1.6-1.6-4.2-1.6-5.8,0l-51,51.1-51.1-51.1c-1.6-1.6-4.2-1.6-5.8,0-1.6,1.6-1.6,4.2 0,5.8l53.9,53.9c0.8,0.8 1.8,1.2 2.9,1.2 1,0 2.1-0.4 2.9-1.2l53.9-53.9c1.7-1.6 1.7-4.2 0.1-5.8z" />
                            </g>
                        </svg>
                    </button>
                    <div id="userMenu" class="bg-white rounded shadow-md mt-2 absolute mt-12 top-0 right-0 min-w-full overflow-auto z-30 invisible">
                        <ul class="list-reset">
                            <li>
                            @if(!Auth::user())
                                <a class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline" href="{{route('laravia.user::login')}}">
                                    {{Laravia::trans('user.btnLogin')}}
                                </a>
                            @endif
                            @if(Auth::user())<form action="{{route('laravia.user::logoutPost')}}" method="POST">@csrf<button class="px-4 py-2 block text-gray-900 hover:bg-gray-400 no-underline hover:no-underline">{{Laravia::trans('user.btnLogout')}}</button></form>@endif
                            </li>


                        </ul>
                    </div>
                </div>


                <div class="block lg:hidden pr-4">
                    <button id="nav-toggle" class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none">
                        <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>


        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-white z-20" id="nav-content">
            <ul class="list-reset lg:flex flex-1 items-center px-4 md:px-0">

                @foreach (Laravia::links() as $navi)

                @if(Auth::user() && data_get($navi,'auth') || Auth::user() && !data_get($navi,'auth') && !data_get($navi,'guest'))
                    <li class="mr-6 my-2 md:my-0">
                        <a href="{{route(data_get($navi,'name'))}}" class="block py-1 md:py-3 pl-1 align-middle text-pink-600 no-underline hover:text-gray-900 border-orange-600 hover:border-orange-600">
                            {{-- <i class="fas fa-home fa-fw mr-3 text-pink-600"></i> --}}
                            <span class="pb-1 md:pb-0 text-sm">
                                {{data_get($navi,'text')}}
                            </span>
                        </a>
                    </li>
                @endif

                @if(!Auth::user() && data_get($navi,'guest'))
                <li class="mr-6 my-2 md:my-0">
                    <a href="{{route(data_get($navi,'name'))}}" class="block py-1 md:py-3 pl-1 align-middle text-pink-600 no-underline hover:text-gray-900 border-b-2 border-orange-600 hover:border-orange-600">
                        <i class="fas fa-home fa-fw mr-3 text-pink-600"></i>
                        <span class="pb-1 md:pb-0 text-sm">
                            {{data_get($navi,'text')}}
                        </span>
                    </a>
                </li>
               @endif

            @endforeach

            </ul>

        </div>

    </div>
</nav>
