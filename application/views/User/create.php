<?php $this->load->view('components/header'); ?>

<div class="grid md:grid-cols-[250px_1fr]">
    <div class="mb-3">
        <?php $this->load->view('components/sidebar'); ?>
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <?php $this->load->view('components/navbar'); ?>
        </div>

        <div class="p-4 pt-[100px] md:px-10 py-[100px] max-w-[500px] mx-auto">

            <h1 class="text-2xl font-bold text-slate-800">Create User</h1>

            <div class="mt-5 bg-white p-4 rounded-md shadow-md">
                <div class="grid gap-x-6 gap-y-4 p-5">

                    <?php echo form_open_multipart('user/store'); ?>

                    <div class="w-full">
                        <div class="relative border-2 border-gray-200 rounded-full w-[180px] h-[180px] mx-auto overflow-hidden">
                            <img src="<?php echo base_url('assets/images/71.png'); ?>" id="img" alt="" class="object-cover w-[180px] h-[180px] mx-auto rounded-full">

                            <input id="imgInput" type="file" src accept="image/x-png,image/gif,image/jpeg" class="" name="image" onchange="loadInputImgToSrc(event)" />
                            <div onclick="openImg()" class="absolute bottom-5 right-7 bg-gray-800/30 w-[35px] h-[35px] hover:bg-gray-900/50 transition-all rounded-full grid place-items-center text-white cursor-pointer">
                                <div class="fal fa-camera"></div>
                            </div>
                        </div>

                        <?php if ($error) : ?>
                            <span class="text-xs text-pink-600 mx-auto"><?php echo $error ?></span>
                        <?php endif ?>
                    </div>

                    <div class="mb-3">
                        <p class="text-sm mb-1">First name</p>
                        <input type="text" name="firstname" autofocus value="<?php echo set_value('firstname') ?>" placeholder="First name" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm
                         <?php if (form_error('firstname')) echo 'form_error border border-pink-500'; ?>">
                        <span class="text-xs text-pink-600"><?php echo form_error('firstname') ?></span>
                    </div>

                    <div class="mb-3">
                        <p class="text-sm mb-1">Last name</p>
                        <input type="text" name="lastname" value="<?php echo set_value('lastname') ?>" placeholder="Last name" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm
                        <?php if (form_error('lastname')) echo 'form_error border border-pink-500'; ?>">
                        <span class="text-xs text-pink-600"><?php echo form_error('lastname') ?></span>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-3">
                            <p>Birthdate</p>
                            <input type="date" name="birthdate" id="birthdate" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm" value="<?php echo set_value('birthdate') ?>">
                            <span class="text-xs text-pink-600"><?php echo form_error('birthdate') ?></span>
                        </div>
                        <!-- <div class="mb-3">
                            <p class="text-sm mb-1">Age</p>
                            <input type="number" name="age" value="<?php echo set_value('age') ?>" placeholder="Age" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm
                            <?php if (form_error('age')) echo 'form_error border border-pink-500'; ?>">
                            <span class="text-xs text-pink-600"><?php echo form_error('age') ?></span>
                        </div> -->
                        <div class="mb-3">
                            <p class="text-sm mb-1">Gender</p>
                            <select id="" name="gender" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm
                            <?php if (form_error('gender')) echo 'form_error border border-pink-500'; ?>">
                                <option value="male" <?php if (set_value('gender') == 'male') echo 'selected'; ?>>Male</option>
                                <option value="female" <?php if (set_value('gender') == 'female') echo 'selected'; ?>>Female</option>
                                <option value="others" <?php if (set_value('gender') == 'others') echo 'selected'; ?>>Others</option>
                            </select>
                            <span class="text-xs text-pink-600"><?php echo form_error('gender') ?></span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <p class="text-sm mb-1">Mobile number</p>

                        <input type="number" name="number" value="<?php echo set_value('number') ?>" placeholder="Mobile number" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm 
                        <?php if (form_error('number')) echo 'form_error border border-pink-500'; ?>" maxlength="11" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        <span class="text-xs text-pink-600"><?php echo form_error('number') ?></span>

                    </div>

                    <div class="mb-3">
                        <p class="text-sm mb-1">Address</p>
                        <input type="text" name="address" value="<?php echo set_value('address') ?>" placeholder="Home address" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm 
                        <?php if (form_error('address')) echo 'form_error border border-pink-500'; ?>">
                        <span class="text-xs text-pink-600"><?php echo form_error('address') ?></span>
                    </div>

                    <div class="mb-3">
                        <p class="text-sm mb-1">Email</p>
                        <input type="email" name="email" value="<?php echo set_value('email') ?>" placeholder="Email" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm 
                        <?php if (form_error('email')) echo 'form_error border border-pink-500'; ?>">
                        <span class="text-xs text-pink-600"><?php echo form_error('email') ?></span>
                    </div>

                    <div class="mt-[25px]">
                        <button type="submit" class="w-full px-3 py-2 bg-[#0E194F] text-white outline-none rounded-md text-sm">Create</button>
                        <a href="<?php echo site_url('/user'); ?>" type="button" class="w-full px-3 py-2 text-[#0E194F] outline-none rounded-md text-sm text-center">Cancel</a>

                    </div>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('components/footer'); ?>