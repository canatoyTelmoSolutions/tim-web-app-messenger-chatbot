

<div class="bg-[#0E194F] h-screen  p-4 w-screen md:w-[400px] lg:w-[250px] shadow-2xl">
    <div class="">
        <div class="grid grid-cols-2 gap-4 p-4">
            <div class="bg-white p-1 w-fit h-fit">
                <img 
                    src="<?php echo base_url('assets/images/img_landing_page.png'); ?>" 
                    alt=""
                    class="w-[80px] mx-auto"
                    >
            </div>
            <div class="text-white my-auto">
                <h1 class="font-bold text-xl">TELMO</h1>
                <p class="text-xs">SOLUTIONS</p>
            </div>
        </div>
        <hr>

        <div class="text-white">
            <div class="mt-10">
                <h1 class="text-gray-400 text-sm">MENU</h1>

                <div class="mt-3 grid gap-2">
                    <a href="<?php echo site_url('/dashboard'); ?>" class="group relative grid grid-cols-[30px_1fr] items-center p-2 cursor-pointer hover:bg-[#212A64] rounded-md transition-all hover:p-2 hover:px-3 hover:shadow-md">
                        <i class="fal fa-chart-line"></i>
                        <h2 class="text-sm">Dashboard</h2>

                        <div class="absolute hidden right-0 w-1 grow h-[10ppx] bg-[#00FFFF] text-[#00FFFF] rounded-md mr-2 group-hover:block">l</div>
                    </a>
                    <a href="<?php echo site_url('/user'); ?>" class="group relative grid grid-cols-[30px_1fr] items-center p-2 cursor-pointer hover:bg-[#212A64] rounded-md transition-all hover:p-2 hover:px-3 hover:shadow-md">
                        <i class="fal fa-users"></i>
                        <h2 class="text-sm">Users</h2>

                        <div class="absolute hidden right-0 w-1 grow h-[10ppx] bg-[#00FFFF] text-[#00FFFF] rounded-md mr-2 group-hover:block">l</div>
                    </a>
                    <a href="<?php echo site_url('/chatbot'); ?>" class="group relative grid grid-cols-[30px_1fr] items-center p-2 cursor-pointer hover:bg-[#212A64] rounded-md transition-all hover:p-2 hover:px-3 hover:shadow-md">
                        <i class="fal fa-robot"></i>
                        <h2 class="text-sm">Chatbot Settings</h2>

                        <div class="absolute hidden right-0 w-1 grow h-[10ppx] bg-[#00FFFF] text-[#00FFFF] rounded-md mr-2 group-hover:block">l</div>
                    </a>
                </div>
            </div>

            <div class="mt-10">
                <h1 class="text-gray-400 text-sm">ACCOUNT</h1>

                <div class="mt-3 grid gap-2">
                    <a href="<?php echo site_url('/setting'); ?>" class="group relative grid grid-cols-[30px_1fr] items-center p-2 cursor-pointer hover:bg-[#212A64] rounded-md transition-all hover:p-2 hover:px-3 hover:shadow-md">
                        <i class="fal fa-cog"></i>
                        <h2 class="text-sm">Settings</h2>

                        <div class="absolute hidden right-0 w-1 grow h-[10ppx] bg-[#00FFFF] text-[#00FFFF] rounded-md mr-2 group-hover:block">l</div>
                    </a>
                    <div class="group relative grid grid-cols-[30px_1fr] items-center p-2 cursor-pointer hover:bg-[#212A64] rounded-md transition-all hover:p-2 hover:px-3 hover:shadow-md">
                        <i class="fal fa-sign-out"></i>
                        <h2 class="text-sm">Logout</h2>
 
                        <div class="absolute hidden right-0 w-1 grow h-[10ppx] bg-[#00FFFF] text-[#00FFFF] rounded-md mr-2 group-hover:block">l</div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>