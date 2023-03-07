<?php $this->load->view('components/header'); ?>

<div class="grid md:grid-cols-[250px_1fr]">
    <div class="">
        <?php $this->load->view('components/sidebar'); ?>
    </div>
    <div class="">
        <div class="">
            <?php $this->load->view('components/navbar'); ?>
        </div>

        <div class="p-4 pt-[100px] md:px-10 py-[100px]">
            <h1 class="text-2xl font-bold text-slate-800">Setting</h1>

            <div class="items-center    ">
                
<div class="flex items-center justify-center relative">
  <img src="https://i.pinimg.com/originals/a8/bc/90/a8bc90ea196737604770aaf9c2d56a51.jpg" class="rounded-full w-32 absolute top-10 transform -translate-y-1/2">
  <div class="bg-red-200 w-1/3 mt-[50px] h-[600px] rounded-lg">
    <div class="flex items-center justify-center pt-10 flex-col">
      <h1 class="text-gray-800 font-semibold text-xl mt-5">Bae Suzy</h1>
      <h1 class="text-gray-500 text-sm">Seoul, South Korea</h>
      <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
        Username
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
    </div>
  </div>
</div>

            </div>
        </div>
    </div>
</div>

<?php $this->load->view('components/footer'); ?>
