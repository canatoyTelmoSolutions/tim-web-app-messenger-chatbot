<div class="fixed w-full z-40 md:w-[calc(100%_-_250px)] flex justify-between items-center shadow-md p-4 md:px-10 bg-white">
    <div class="font-bold cursor-pointer">TIM - Prototype</div>
    <div class="flex items-center">
        <div class="relative mr-5">
            <form action="<?php echo base_url('search') ?>" method="GET">
                <input type="search" name="q" min="1" placeholder="Search" class="hidden md:block bg-[#EDEDED] placeholder:text-slate-600 p-2 pr-2 text-sm rounded-2xl pl-8 outline-none border-none">
                <i class="fal fa-search absolute left-[10px] top-[10px] text-sm hidden md:block"></i>
            </form>
        </div>
        <div class="">
            <div class="flex items-center md:cursor-pointer">
                <div class="w-fit h-fit rounded-full border-2 border-gray-200 mr-2 cursor-pointer">
                    <img src="<?php echo base_url('assets/images/img_landing_page.png'); ?>" alt="" class="w-[40px] h-[40px] rounded-full">
                </div>

                <div onclick="openNav()" class="block md:hidden hover:bg-gray-300 transition-all cursor-pointer rounded-full grid place-items-center w-[40px] h-[40px]">
                    <i class="fal fa-bars font-bold"></i>
                </div>

                <div class="leading-none hidden md:block">
                    <h2 class="font-bold text-md">Lorem</h2>
                    <p class="text-xs">Admin</p>
                </div>
            </div>
        </div>
    </div>
</div>