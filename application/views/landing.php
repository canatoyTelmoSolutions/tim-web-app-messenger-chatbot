<?php $this->load->view('components/header'); ?>



<div class="bg-gradient-to-br from-white via-sky-100 to-indigo-800 min-h-fit h-screen">
	<div class="">
		<div class="flex justify-between pt-1 px-2 pl-0 text-white items-center max-w-[1200px] mx-auto">
			<div class="">
				<img 
					src="<?php echo base_url('assets/images/logo.png'); ?>"
					alt=""
					class="w-[60px] md:w-[100px] mx-auto"
				>
			</div>

			<div class="flex items-center font-bold">
				<a href="<?php echo site_url('/auth'); ?>" class="text-sm md:text-md cursor-pointer text-[#212A64] font-bold hover:text-gray transition-all">Login</a>
				<a href="<?php echo site_url('/auth'); ?>" class="text-sm md:text-md bg-[#212A64] ml-4 py-2 px-4 rounded-md cursor-pointer hover:bg-[#212A80] transition-all">Sign Up</a>
			</div>
		</div>
	</div>

	<div class="max-w-[1200px] mx-auto p-2 md:p-0">
		<div class="mt-[50px] md:grid grid-cols-2 place-items-center">
			<div class="leading-none text-[#0E194F]">
				<div class="font-bold text-[50px] lg:text-[106px]">Your</div>
				<div class="font-bold text-[30px]">Business Our</div>
				<div class="text-[#FD810E] font-bold text-[50px] lg:text-[106px]">SOLUTION</div>

				<p class="mb-10 font-semibold mt-4">Fostering Innovation in Business</p>

				<a href="<?php echo site_url('/auth'); ?>" class="text-sm md:text-md font-bold text-white bg-[#0E194F] rounded-2xl py-2 md:py-3 px-4 md:px-6 w-fit hover:bg-slate-800 transition-all cursor-pointer">
					<span>Get Started</span>
					<i class="fal fa-arrow-right ml-2 md:ml-4"></i>
				</a>
			</div>
			<div class="">
				<img 
					src="<?php echo base_url('assets/images/landing_illustration.png'); ?>"
					alt=""
					class="w-[500px] mx-auto"
					>
				</div>
		</div>
	</div>


</div>


<?php $this->load->view('components/footer'); ?>