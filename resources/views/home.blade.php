@extends('layouts.app')

@section('content')
    <section class=" mt-[180px]">

        <div class=" grid gap-20 grid-cols-1 md:grid-cols-2 items-center justify-between">

            <div class=" about">

                <div>
                    <h1 class=" text-6xl g-t font-semibold "> About me



                    </h1>

                    <p class=" mt-2 text-gray-300 text-justify">
                        Hi there! 👋 I'm <span class=" code"> Fahad Bhuiyan</span> from Bangladesh, an 18-year-old web developer with a passion for crafting seamless
                        digital experiences. Specializing in Laravel, React.js, and Tailwind CSS, I thrive on turning ideas
                        into elegant, functional websites and applications
                    </p>

                    <div class=" mt-5">

                        <ul>
                            <li><a href="#contact"
                                    class=" bg-primary rounded-md py-2 px-4 text-black font-semibold">CONTACT</a></li>
                        </ul>

                    </div>

                </div>

            </div>


            <div class="">
                {{-- <img src="https://laravel.com/assets/img/welcome/docs-dark.svg" alt="Laravel documentation screenshot"
                    class="hidden aspect-video  rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block" />
             --}}

             <img src="{{asset('images/IMG_9959_11zon.png')}}" width=" 400px" class="  rounded-full "  alt="">

                </div>


        </div>

    </section>



    <section class="mt-[280px]">


        <div>
            <h1 class=" text-5xl g-t font-semibold capitalize"> My Skills </h1>
        </div>

        <div class=" grid grid-cols-1 gap-5 md:grid-cols-3 py-5">

            <div
                class=" h-[220px] py-2 px-2 w-full rounded-md shadow-md border-primary/45 border-2 bg-gradient-to-r from-[#0d0d0d] to-[#0c0c0c] ">

                <div class=" flex items-center justify-center flex-col ">


                    <div class=" icon mt-2 text-3xl text-primary">
                        <i class="fa-brands fa-laravel"></i>
                    </div>

                    <div class=" mt-9 text-center">
                        <div>

                            <h1 class=" text-2xl font-semibold uppercase g-t"> Laravel </h1>
                        </div>
                        <div class=" mt-9">

                            <p class=" font-semibold g-t"> EXPERIENCE - 2 years </p>
                        </div>
                    </div>


                </div>



            </div>

            <div
                class=" h-[220px] py-2 px-2 w-full rounded-md shadow-md border-primary/45 border-2 bg-gradient-to-r from-[#0d0d0d] to-[#0c0c0c] ">

                <div class=" flex items-center justify-center flex-col ">


                    <div class=" icon mt-2 text-3xl text-primary">
                        <i class="fa-brands fa-react"></i>
                    </div>

                    <div class=" mt-9 text-center">
                        <div>

                            <h1 class=" text-2xl font-semibold uppercase g-t"> React JS </h1>
                        </div>
                        <div class=" mt-9">

                            <p class=" font-semibold g-t"> EXPERIENCE - 1 years </p>
                        </div>
                    </div>


                </div>



            </div>
            <div
                class=" h-[220px] py-2 px-2 w-full rounded-md shadow-md border-primary/45 border-2 bg-gradient-to-r from-[#0d0d0d] to-[#0c0c0c] ">

                <div class=" flex items-center justify-center flex-col ">


                    <div class=" icon mt-2 text-3xl text-primary">
                        <i class="fa-brands fa-php"></i>
                    </div>

                    <div class=" mt-9 text-center">
                        <div>

                            <h1 class=" text-2xl font-semibold uppercase g-t"> PHP </h1>
                        </div>
                        <div class=" mt-9">

                            <p class=" font-semibold g-t"> EXPERIENCE - 3 years </p>
                        </div>
                    </div>


                </div>



            </div>
            <div
                class=" h-[220px] py-2 px-2 w-full rounded-md shadow-md border-primary/45 border-2 bg-gradient-to-r from-[#0d0d0d] to-[#0c0c0c] ">

                <div class=" flex items-center justify-center flex-col ">


                    <div class=" icon mt-2 text-3xl text-primary">
                        <i class="fa-brands fa-css3"></i>
                    </div>

                    <div class=" mt-9 text-center">
                        <div>

                            <h1 class=" text-2xl font-semibold uppercase g-t"> CSS </h1>
                        </div>
                        <div class=" mt-9">

                            <p class=" font-semibold g-t"> EXPERIENCE - 3 years </p>
                        </div>
                    </div>


                </div>



            </div>




        </div>

        </div>


    </section>




    <section class=" py mt-[280px]">

        <div>
            <h1 class=" text-5xl g-t font-semibold capitalize"> My portfolio </h1>
        </div>

        <div class=" py-5 grid grid-cols-1 gap-5 md:grid-cols-4">

            <div>
                <img src="https://laravel.com/assets/img/welcome/docs-dark.svg" alt="Laravel documentation screenshot"
                    class="hidden aspect-video  rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block" />
            </div>
            <div>
                <img src="https://laravel.com/assets/img/welcome/docs-dark.svg" alt="Laravel documentation screenshot"
                    class="hidden aspect-video  rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block" />
            </div>

            <div>
                <img src="https://laravel.com/assets/img/welcome/docs-dark.svg" alt="Laravel documentation screenshot"
                    class="hidden aspect-video  rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block" />
            </div>
            <div>
                <img src="https://laravel.com/assets/img/welcome/docs-dark.svg" alt="Laravel documentation screenshot"
                    class="hidden aspect-video  rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block" />
            </div>
            <div>
                <img src="https://laravel.com/assets/img/welcome/docs-dark.svg" alt="Laravel documentation screenshot"
                    class="hidden aspect-video  rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block" />
            </div>
            <div>
                <img src="https://laravel.com/assets/img/welcome/docs-dark.svg" alt="Laravel documentation screenshot"
                    class="hidden aspect-video  rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block" />
            </div>
            <div>
                <img src="https://laravel.com/assets/img/welcome/docs-dark.svg" alt="Laravel documentation screenshot"
                    class="hidden aspect-video  rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block" />
            </div>
            <div>
                <img src="https://laravel.com/assets/img/welcome/docs-dark.svg" alt="Laravel documentation screenshot"
                    class="hidden aspect-video  rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block" />
            </div>
            <div>
                <img src="https://laravel.com/assets/img/welcome/docs-dark.svg" alt="Laravel documentation screenshot"
                    class="hidden aspect-video  rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block" />
            </div>





        </div>
    </section>



    <section class=" py-7  mt-[280px]">
        @include('layouts.contact')
    </section>
@endsection
