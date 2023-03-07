<?php $this->load->view('components/header'); ?>

<div class="grid md:grid-cols-[250px_1fr]">
    <div class="">
        <?php $this->load->view('components/sidebar'); ?>
    </div>
    <div class="">
        <div class="">
            <?php $this->load->view('components/navbar'); ?>
        </div>

        <div class="p-4 pt-[100px] md:px-10 py-[100px] max-w-[500px] mx-auto">

            <h1 class="text-2xl font-bold text-slate-800">Create User</h1>

            <div class="mt-5 bg-white p-4 rounded-md shadow-md">

                <form action="<?php echo base_url('post-image') ?>" method="post" enctype="multipart/form-data">
                    <label for="image" class="mb-2 inline-block text-neutral-700 dark:text-neutral-200">Default file input example</label>
                    <input type="file" id="image" name="image" size="33" class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-neutral-700 outline-none transition duration-300 ease-in-out file:-mx-3 file:-my-1.5 file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-1.5 file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[margin-inline-end:0.75rem] file:[border-inline-end-width:1px] hover:file:bg-neutral-200 focus:border-primary focus:bg-white focus:text-neutral-700 focus:shadow-[0_0_0_1px] focus:shadow-primary focus:outline-none dark:bg-transparent dark:text-neutral-200 dark:focus:bg-transparent">
                    <button type="submit" class="inline-block rounded bg-neutral-800 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-neutral-50 shadow-[0_4px_9px_-4px_#332d2d] transition duration-150 ease-in-out hover:bg-neutral-800 hover:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.3),0_4px_18px_0_rgba(51,45,45,0.2)] focus:bg-neutral-800 focus:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.3),0_4px_18px_0_rgba(51,45,45,0.2)] focus:outline-none focus:ring-0 active:bg-neutral-900 active:shadow-[0_8px_9px_-4px_rgba(51,45,45,0.3),0_4px_18px_0_rgba(51,45,45,0.2)] dark:bg-neutral-900 dark:shadow-[0_4px_9px_-4px_#171717] dark:hover:bg-neutral-900 dark:hover:shadow-[0_8px_9px_-4px_rgba(27,27,27,0.3),0_4px_18px_0_rgba(27,27,27,0.2)] dark:focus:bg-neutral-900 dark:focus:shadow-[0_8px_9px_-4px_rgba(27,27,27,0.3),0_4px_18px_0_rgba(27,27,27,0.2)] dark:active:bg-neutral-900 dark:active:shadow-[0_8px_9px_-4px_rgba(27,27,27,0.3),0_4px_18px_0_rgba(27,27,27,0.2)]">
                        Upload image
                    </button>
                </form>

                <?php echo form_open('user/store'); ?>
                <div class="grid gap-x-6 gap-y-4 p-5">


                    <div class="">
                        <p class="text-sm mb-1">First name</p>
                        <input type="text" name="firstname" autofocus value="<?php echo set_value('firstname') ?>" placeholder="First name" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm
                         <?php if (form_error('firstname')) echo 'form_error border border-pink-500'; ?>">
                        <span class="text-xs text-pink-600"><?php echo form_error('firstname') ?></span>
                    </div>

                    <div class="">
                        <p class="text-sm mb-1">Last name</p>
                        <input type="text" name="lastname" value="<?php echo set_value('lastname') ?>" placeholder="Last name" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm
                        <?php if (form_error('lastname')) echo 'form_error border border-pink-500'; ?>">
                        <span class="text-xs text-pink-600"><?php echo form_error('lastname') ?></span>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="">
                            <p class="text-sm mb-1">Age</p>
                            <input type="number" name="age" value="<?php echo set_value('age') ?>" placeholder="Age" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm
                            <?php if (form_error('age')) echo 'form_error border border-pink-500'; ?>">
                            <span class="text-xs text-pink-600"><?php echo form_error('age') ?></span>
                        </div>
                        <div class="">
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

                    <div class="">
                        <p class="text-sm mb-1">Mobile number</p>

                        <input type="number" name="number" value="<?php echo set_value('number') ?>" placeholder="Mobile number" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm 
                        <?php if (form_error('number')) echo 'form_error border border-pink-500'; ?>" maxlength="11" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        <span class="text-xs text-pink-600"><?php echo form_error('number') ?></span>

                    </div>

                    <div class="">
                        <p class="text-sm mb-1">Address</p>
                        <input type="text" name="address" value="<?php echo set_value('address') ?>" placeholder="Home address" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm 
                        <?php if (form_error('address')) echo 'form_error border border-pink-500'; ?>">
                        <span class="text-xs text-pink-600"><?php echo form_error('address') ?></span>
                    </div>

                    <div class="">
                        <p class="text-sm mb-1">Email</p>
                        <input type="email" name="email" value="<?php echo set_value('email') ?>" placeholder="Email" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm 
                        <?php if (form_error('email')) echo 'form_error border border-pink-500'; ?>">
                        <span class="text-xs text-pink-600"><?php echo form_error('email') ?></span>
                    </div>

                    <button type="submit" class="w-full px-3 py-2 bg-[#0E194F] text-white outline-none rounded-md text-sm">Create</button>
                    <a href="<?php echo site_url('/user'); ?>" type="button" class="w-full px-3 py-2 text-[#0E194F] outline-none rounded-md text-sm text-center">Cancel</a>

                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('components/footer'); ?>