<?php $this->load->view('components/header'); ?>

<div class="grid md:grid-cols-[250px_1fr]">
    <div class="">
        <?php $this->load->view('components/sidebar'); ?>
    </div>
    <div class="">
        <div class="">
            <?php $this->load->view('components/navbar'); ?>
        </div>

        <div class="p-4 pt-[100px] md:px-10 py-[100px] max-w-[550px] mx-auto">

            <?php echo validation_errors(); ?>

            <h1 class="text-2xl font-bold text-slate-800">Create</h1>

            <div class="mt-5 bg-white p-4 rounded-md shadow-md">

            <?php echo form_open('User/store'); ?>
                <div class="grid gap-x-6 gap-y-4 p-5">


                    <div class="">
                        <p class="text-sm mb-1">First name</p>
                        <input type="text" name="firstname" autocomplete="off" required placeholder="First name" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm">
                    </div>

                    <div class="">
                        <p class="text-sm mb-1">Last name</p>
                        <input type="text" name="lastname"  autocomplete="off" required placeholder="Last name" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm">
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="">
                            <p class="text-sm mb-1">Age</p>
                            <input type="number" name="age" autocomplete="off" required placeholder="Age" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm">
                        </div>
                        <div class="">
                            <p class="text-sm mb-1">Gender</p>
                            <select name="" id="" name="gender" required class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm">
                                <option value="">Male</option>
                                <option value="">Female</option>
                                <option value="">Others</option>
                            </select>
                        </div>
                    </div>

                    <div class="">
                        <p class="text-sm mb-1">Mobile number</p>
                        <input type="text" name="number" placeholder="Mobile number" autocomplete="off" required class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm">
                    </div>

                    <div class="">
                        <p class="text-sm mb-1">Address</p>
                        <input type="text" name="address" placeholder="Home address" autocomplete="off" required class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm">
                    </div>

                    <div class="">
                        <p class="text-sm mb-1">Email</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off" required class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm">
                    </div>

                    <button type="submit" class="w-full px-3 py-2 bg-[#0E194F] text-white outline-none rounded-md text-sm">Create</button>
                    
                    </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('components/footer'); ?>
