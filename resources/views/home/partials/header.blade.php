<section id="home" class="pt-14 sm:pt-36">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center py-5 sm:w-1/2">
                <h1
                    class="text-3xl leading-10 font-bold text-dark dark:text-white max-w-xs sm:max-w-full lg:max-w-[555px] lg:text-5xl xl:max-w-[650px] xl:text-6xl 2xl:text-[69px]">
                    Seatap
                    <span class="text-primary">Belajar</span>
                    & <span class="text-primary">Berkarya</span>
                    Bersama.
                </h1>
                <p
                    class="text-secondary dark:text-gray-400 font-semibold my-[10px] text-xs leading-relaxed max-w-xs sm:max-w-full mb-7 lg:max-w-[350px] lg:text-md xl:leading-6 xl:max-w-md xl:text-sm">
                    Mari bergabung bersama kami dan tingkatkan skill anda
                    dibidang
                    <span class="uppercase font-bold text-primary underline underline-offset-2">INFORMATIKA!</span>
                </p>
                @guest
                    <a href="{{ route('register') }}"
                        class="inline-flex items-center px-6 py-3 bg-gradient-to-bl from-black via-emerald-700 to-black border dark:border dark:border-gray-700 dark:bg-gradient-to-bl dark:from-teal-950 dark:via-black dark:to-teal-950 border-transparent rounded-md font-semibold text-sm text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition ease-in-out duration-150">Join
                        Now</a>
                @endguest
            </div>
            <div class="w-full sm:flex sm:justify-end sm:w-1/2 py-5">
                <div class="">
                    <img src="{{ asset('storage/image/default/sci-maskot-lg.png') }}" alt="maskot"
                        class="mx-auto max-w-xs sm:max-w-max sm:w-full md:w-72 lg:w-96 xl:w-[500px]" />
                </div>
            </div>
        </div>
    </div>
</section>
