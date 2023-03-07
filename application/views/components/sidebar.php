<script>
	// function toggleNav() {
	// var nav = document.getElementById("sidebar");
	// if (nav.style.width === "250px") {
    	// nav.style.width = "100px";
		// const navbarToggle = document.querySelector("#side");
		// navbarToggle.classList.toggle('rotate-180');
	// } else {
    	// nav.style.width = "250px";
	// }
// }
</script>

<div id="sidebar" class="fixed z-50 -left-[1000px] md:left-0 bg-[#0E194F] h-screen min-h-fit overflow-y-auto p-4 w-full md:w-[250px] shadow-2xl">
	<!-- <i type="button" id="side" class="fa-solid fa-arrow-left bg-white p-2 absolute rounded-full -right-0 top-7" onclick="toggleNav();"></i> -->
	<!-- <i type="button" id="open-slide" style="display: none" class="fa-solid fa-arrow-right bg-white p-2 absolute rounded-full -right-0 top-7" onclick="closeNav()"></i> -->
    <div class="">
        <div class="hidden md:grid grid-cols-2 gap-4 p-4">
            <div class="bg-white p-1 w-fit h-fit">
                <img src="<?php echo base_url('assets/images/img_landing_page.png'); ?>" alt="" class="w-[80px] mx-auto">
            </div>
            <div class="text-white my-auto cursor-default name">
                <h1 class="font-bold text-xl">TELMO</h1>
                <p class="text-xs">SOLUTIONS</p>
            </div>
        </div>
        <hr class="hidden md:block" style="background-color: #FD810E; height: 2px; margin-left: 10px; border: none; ">

        <!-- <div class="md:hidden flex items-center justify-between text-white"> -->
            <!-- <div class="">TELMO</div> -->
            <!-- <div onclick="closeNav()" class="block md:hidden bg-[#212A64] transition-all cursor-pointer rounded-full grid place-items-center w-[40px] h-[40px]"> -->
                <!-- <i class="fal fa-times font-bold"></i> -->
            <!-- </div> -->
        <!-- </div> -->

        <div class="text-white">
            <div class="mt-10">
                <h1 class="text-gray-400 text-sm">MENU</h1>

                <div class="mt-3 grid gap-2">
                    <a href="<?php echo site_url('/dashboard'); ?>" class="group relative grid grid-cols-[30px_1fr] items-center p-2 cursor-pointer hover:bg-[#212A64] rounded-md transition-all hover:p-2 hover:px-3 hover:shadow-md <?php if ($this->uri->segment(1) == "dashboard") {
                                                                                                                                                                                                                                            echo "bg-[#212A64] px-3 ";
                                                                                                                                                                                                                                        } ?>">
                        <i class="fal fa-chart-line"></i>
                        <h2 class="text-sm">Dashboard</h2>

                        <div class="absolute right-0 w-1 grow h-[10ppx] bg-[#FD810E] text-[#FD810E] rounded-md mr-2 group-hover:block <?php if ($this->uri->segment(1) == "dashboard") {
                                                                                                                                            echo "block";
                                                                                                                                        } else {
                                                                                                                                            echo "hidden";
                                                                                                                                        } ?>">l</div>
                    </a>
                    <a href="<?php echo site_url('/user'); ?>" class="group relative grid grid-cols-[30px_1fr] items-center p-2 cursor-pointer hover:bg-[#212A64] rounded-md transition-all hover:p-2 hover:px-3 hover:shadow-md <?php if ($this->uri->segment(1) == "user") {
                                                                                                                                                                                                                                        echo "bg-[#212A64] px-3 ";
                                                                                                                                                                                                                                    } ?>">
                        <i class="fal fa-users"></i>
                        <h2 class="text-sm">Users</h2>

                        <div class="absolute right-0 w-1 grow h-[10ppx] bg-[#FD810E] text-[#FD810E] rounded-md mr-2 group-hover:block <?php if ($this->uri->segment(1) == "user") {
                                                                                                                                            echo "block";
                                                                                                                                        } else {
                                                                                                                                            echo "hidden";
                                                                                                                                        } ?>">l</div>
                    </a>
                    <a href="<?php echo site_url('/chatbot'); ?>" class="group relative grid grid-cols-[30px_1fr] items-center p-2 cursor-pointer hover:bg-[#212A64] rounded-md transition-all hover:p-2 hover:px-3 hover:shadow-md <?php if ($this->uri->segment(1) == "chatbot") {
                                                                                                                                                                                                                                        echo "bg-[#212A64] px-3 ";
                                                                                                                                                                                                                                    } ?>">
                        <i class="fal fa-robot"></i>
                        <h2 class="text-sm">Chatbot Settings</h2>

                        <div class="absolute right-0 w-1 grow h-[10ppx] bg-[#FD810E] text-[#FD810E] rounded-md mr-2 group-hover:block <?php if ($this->uri->segment(1) == "chatbot") {
                                                                                                                                            echo "block";
                                                                                                                                        } else {
                                                                                                                                            echo "hidden";
                                                                                                                                        } ?>">l</div>
                    </a>
                </div>
            </div>

            <br>
            <hr class="hidden md:block" style="background-color: #FD810E; height: 2px; margin-left: 10px; border: none; ">

            <div class="mt-4">
                <h1 class="text-gray-400 text-sm">ACCOUNT</h1>

                <div class="mt-3 grid gap-2">
                    <a href="<?php echo site_url('/setting'); ?>" class="group relative grid grid-cols-[30px_1fr] items-center p-2 cursor-pointer hover:bg-[#212A64] rounded-md transition-all hover:p-2 hover:px-3 hover:shadow-md 
                    <?php if ($this->uri->segment(1) == "setting") {
                        echo "bg-[#212A64] px-3 ";
                    } ?>">
                        <i class="fal fa-cog"></i>
                        <h2 class="text-sm">Settings</h2>

                        <div class="absolute right-0 w-1 grow h-[10ppx] bg-[#FD810E] text-[#FD810E] rounded-md mr-2 group-hover:block 
                        <?php if ($this->uri->segment(1) == "setting") {
                            echo "block";
                        } else {
                            echo "hidden";
                        } ?>">l</div>
                    </a>
                    <a href="<?php echo base_url('/logout'); ?>" class="group relative grid grid-cols-[30px_1fr] items-center p-2 cursor-pointer hover:bg-[#212A64] rounded-md transition-all hover:p-2 hover:px-3 hover:shadow-md">
                        <i class="fal fa-sign-out"></i>
                        <h2 class="text-sm">Logout</h2>
                        <div class="absolute hidden right-0 w-1 grow h-[10ppx] bg-[#FD810E] text-[#FD810E] rounded-md mr-2 group-hover:block">l</div>
                    </a>
                </div>
            </div>
        </div>
    </div>


</div>
