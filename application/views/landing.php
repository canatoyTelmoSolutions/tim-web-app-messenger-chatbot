<style>
	.stage {
        display: flex;
        height: 370px;
        width: 100%;
    }
    .box {
        align-self: flex-end;
        animation-duration: 3.7s;
        animation-iteration-count: infinite;
        margin: 0 auto 0 auto;
        transform-origin: bottom;
        width: 200px;
    }
    .bounce-1 {
        animation-name: bounce-1;
        animation-timing-function: linear;
    }
    @keyframes bounce-1 {
        0%   { transform: translateY(0); }
        50%  { transform: translateY(-10px); }
        100% { transform: translateY(0); }
    }
</style>

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
				<a href="<?php echo site_url('/auth'); ?>"  class="text-sm md:text-md bg-[#212A64] ml-4 py-2 px-4 rounded-md cursor-pointer hover:bg-[#212A80] transition-all">Login</a>
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
			<div class="stage">
				<img 
					src="<?php echo base_url('assets/images/landing_illustration.png'); ?>"
					alt=""
					class="w-[500px] mx-auto box bounce-1"
					>
			</div>
		</div>
	</div>


</div>


<?php $this->load->view('components/footer'); ?>
