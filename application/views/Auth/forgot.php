<?php $this->load->view('components/header'); ?>



<div class="bg-gradient-to-br from-white via-sky-100 to-indigo-800 min-h-fit h-screen">
	<div class="">
		<img src="<?php echo base_url('assets/images/blobt.svg'); ?>" class="w-[500px] mx-auto box bounce-1 index=100 absolute  right-0 top-0 ">
		<img src="<?php echo base_url('assets/images/blobb.png'); ?>" class="w-[500px] mx-auto box bounce-1 index=100 absolute left-0 bottom-0 ">
		<div class="flex justify-between pt-18 px-2 pl-0 text-white items-center max-w-[1200px] mx-auto">



		</div>
	</div>

	<div class="max-w-[1200px] mx-auto p-2 md:p-0">
		<div class="mt-[50px] md:grid grid-cols-2 place-items-center">
			<div class="leading-none text-[#0E194F]">
				<div class="font-bold text-[50px] lg:text-[75px] mt-20">Forgot</div>
				<div class="flex">
					<div class="font-bold text-[50px] lg:text-[75px] mr-1">Your</div>
					<div class="text-[#FD810E] font-bold text-[50px] lg:text-[75px]">Password?</div>
				</div>
				<div class="text-[50px] ml-19 mt-6 lg:text-[29px] flex flex-row">Enter the email address associated</div>
				<div class="text-[50px] ml-19 lg:text-[29px] flex flex-row">with your account.</div>

				<div class="w-full max-w-2xl">
					<form class="  pt-2 pb-6 mb-3">
						<input class="border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="Email Address">
					</form>

				</div>
				<br><br>
				<div class=" pt-2 p-20 pb-6">
					<a href="<?php echo site_url('/login'); ?>" class=" font-thin  md:text-md  text-black rounded-2xl py-2 md:py-3 px-4 md:px-6 w-fit  transition-all cursor-pointer">
						<span>Back to Log in</span>

					</a>
					<a href="<?php echo site_url('/auth/sentresetpassword'); ?>" class="text-sm md:text-md  text-white bg-[#0E194F] rounded py-2 md:py-3 px-4 md:px-6 w-fit hover:bg-slate-800 transition-all cursor-pointer">
						<span>Reset Password</span>
					</a>
				</div>
			</div>





			<div class="stage mt-5">
				<img src="<?php echo base_url('assets/images/1991.png'); ?>" alt="" class="w-[500px] mx-auto box bounce-1">
			</div>
		</div>
	</div>


</div>