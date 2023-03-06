<?php $this->load->view('components/header'); ?>



<div class="bg-gradient-to-br from-white via-sky-100 to-indigo-800 min-h-fit h-screen ">
	<div class="">
		<div class="flex justify-between  pt-18 px-2 pl-0 text-white items-center max-w-[1200px] mx-auto">
			

		
		</div>
	</div>

	<div class="max-w-[1200px] mx-auto p-2 md:p-0">
		<div class="mt-[50px] md:grid grid-cols-2 place-items-center">
			<div class="leading-none text-[#0E194F]">
				<div class="text-[50px] lg:text-[26px] mt-20">Recovery email has been sent. Please check your 
                    email to proceed on recovering your account.</div>
                 
              
                <div class="w-full max-w-2xl">       
        </div>
<br><br>
               <div class="pt-2 pb-6">

				<a href="<?php echo site_url('/auth/resetpassword'); ?>" class="text-sm md:text-md text-white bg-[#0E194F] rounded-md py-2 md:py-3 px-4 md:px-6 w-fit hover:bg-slate-800 transition-all cursor-pointer">
					<span>Return</span>	
				</a>
                </div>

                <div class="text-[50px] lg:text-[18px] mt-2">Didn’t received the link? Try again in 60s..</div>
			</div>





			<div class="stage mt-10" >
				<img 
					src="<?php echo base_url('assets/images/71.png'); ?>"
					alt=""
					class="w-[500px] mx-auto box bounce-1"
					>
			</div>
		</div>
	</div>


</div>
