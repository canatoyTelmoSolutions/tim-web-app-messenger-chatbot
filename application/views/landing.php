<?php $this->load->view('components/header'); ?>



<div class="">
	<div class="bg-[#13005A]">
		<div class="flex justify-between py-4 text-white items-center max-w-[1200px] mx-auto">
			<div class="font-bold text-2xl">Telmo Chatbot</div>

			<div class="flex items-center font-bold">
				<div class="cursor-pointer hover:text-gray transition-all">Login</div>
				<a href="<?php echo site_url('/auth'); ?>" class="bg-[#212A64] ml-4 py-2 px-4 rounded-md cursor-pointer hover:bg-[#212A80] transition-all">Sign Up</a>
			</div>
		</div>
	</div>

	<div class="">
		<div class="mt-[50px]">
			<img 
				src="<?php echo base_url('assets/images/img_landing_page.png'); ?>"
			 	alt=""
				class="w-[400px] mx-auto"
				>
		</div>
	</div>


</div>


<?php $this->load->view('components/footer'); ?>