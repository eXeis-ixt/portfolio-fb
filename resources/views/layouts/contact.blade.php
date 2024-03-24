<section>

    <div class=" flex justify-center items-center flex-col ">


        <div class="">
            <h1 class=" text-center py-3 text-4xl md:text-8xl g-t font-bold">

                Contact me
            </h1>

            <form action="" method="POST">
            <div class=" grid grid-cols-1 gap-3">
                    @csrf
                <input
                    class=" outline-none focus:outline-primary/15 border-primary rounded-md  bg-zinc-900 py-2 px-4 text-primary"
                    type="text" placeholder="name" required>
                <input
                    class=" outline-none focus:outline-primary/15 border-primary rounded-md  bg-zinc-900 py-2 px-4 text-primary"
                    type="text" placeholder="Email" required>
                <textarea class=" outline-none focus:outline-primary/15 border-primary rounded-md  bg-zinc-900 py-2 px-4 text-primary"
                    type="text" placeholder="Your message" required id="" cols="20" rows="10"></textarea>



                        <button type="submit" class=" bg-primary py-3 rounded-md"> Submit</button>


                    </div>
                </form>



        </div>





    </div>


</section>
