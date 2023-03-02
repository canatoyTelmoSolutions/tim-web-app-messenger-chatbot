<?php $this->load->view('components/header'); ?>




<div class="grid grid-cols-[1fr_900px] flex ">
    <div class="bg-[#0E194F] grid place-items-center h-screen">
        <div class=" pl-10 ">
            <img src="assets/images/login.svg" alt="" class="content-center pt-10  ">
        </div>
    </div>
    <div class=" grid place-items-center">
        <div class="px-10 w-[400px]">
            <div class="">
            <img src="assets/images/telmo.svg" alt="" class="mx-auto" />    
            </div>

            <form class="grid gap-4">
            <div class="">
                <p class="text-sm mb-1">First name</p>
                <input type="text" name="firstname" placeholder="First name" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm">
            </div>
            <div class="">
                <p class="text-sm mb-1">First name</p>
                <input type="text" name="firstname" placeholder="First name" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm">
           
                
                <div class="flex items-center justify-between mt-1">
                    <div class=""></div>
                    <a href="#" class="text-xs cursor-pointer transition-all">Forget password?</a>
                </div>
            </div>


            <button type="submit" class="w-full px-3 py-2 bg-[#0E194F] text-white outline-none rounded-md text-sm">Create</button>
                    
            </form>
        </div>      
    </div>
</div>

<?php $this->load->view('components/footer'); ?>