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
            <h1 class="text-2xl font-bold text-slate-800">Edit User</h1>

            <div class="mt-5 bg-white p-4 rounded-md shadow-md p-6">
                <?php echo form_open('user/update/' . $user['id']); ?>
                <div class="grid gap-x-6 gap-y-4">
                    <div class="">
                        <p class="text-sm mb-1">First name</p>
                        <input type="text" name="firstname" value="<?php if (set_value('firstname')) {
                                                                        echo set_value('firstname');
                                                                    } else {
                                                                        echo $user['firstname'];
                                                                    } ?>" placeholder="First name" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm
                        <?php if (form_error('firstname')) echo 'form_error border border-pink-500'; ?>">
                        <span class="text-xs text-pink-600"><?php echo form_error('firstname') ?></span>
                    </div>

                    <div class="">
                        <p class="text-sm mb-1">Last name</p>
                        <input type="text" name="lastname" value="<?php if (set_value('lastname')) {
                                                                        echo set_value('lastname');
                                                                    } else {
                                                                        echo $user['lastname'];
                                                                    } ?>" placeholder=" Last name" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm
                            <?php if (form_error('lastname')) echo 'form_error border border-pink-500'; ?>">
                        <span class="text-xs text-pink-600"><?php echo form_error('lastname') ?></span>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="">
                            <p class="text-sm mb-1">Age</p>
                            <input type="number" name="age" value="<?php if (set_value('age')) {
                                                                        echo set_value('age');
                                                                    } else {
                                                                        echo $user['age'];
                                                                    } ?>" placeholder=" Age" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm
                                <?php if (form_error('age')) echo 'form_error border border-pink-500'; ?>">
                            <span class="text-xs text-pink-600"><?php echo form_error('age') ?></span>
                        </div>
                        <div class="">
                            <p class="text-sm mb-1">Gender</p>
                            <select id="" name="gender" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm
                                <?php if (form_error('gender')) echo 'form_error border border-pink-500'; ?>">
                                <option value="male" <?php if (set_value('gender') == 'male' or $user['gender'] == 'male') echo 'selected'; ?>>Male</option>
                                <option value="female" <?php if (set_value('gender') == 'female' or $user['gender'] == 'female') echo 'selected'; ?>>Female</option>
                                <option value="others" <?php if (set_value('gender') == 'others' or $user['gender'] == 'others') echo 'selected'; ?>>Others</option>
                            </select>
                            <span class="text-xs text-pink-600"><?php echo form_error('gender') ?></span>
                        </div>
                    </div>

                    <div class="">
                        <p class="text-sm mb-1">Mobile number</p>
                        <input type="number" name="number" value="<?php if (set_value('number')) {
                                                                        echo set_value('number');
                                                                    } else {
                                                                        echo $user['mobile_number'];
                                                                    } ?>" placeholder="Mobile number" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm 
                            <?php if (form_error('number')) echo 'form_error border border-pink-500'; ?>">
                        <span class="text-xs text-pink-600"><?php echo form_error('number') ?></span>
                    </div>

                    <div class="">
                        <p class="text-sm mb-1">Address</p>
                        <input type="text" name="address" value="<?php if (set_value('address')) {
                                                                        echo set_value('address');
                                                                    } else {
                                                                        echo $user['address'];
                                                                    }
                                                                    ?>" placeholder="Home address" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm 
                            <?php if (form_error('address')) echo 'form_error border border-pink-500'; ?>">
                        <span class="text-xs text-pink-600"><?php echo form_error('address') ?></span>
                    </div>

                    <div class="">
                        <p class="text-sm mb-1">Email</p>
                        <input type="email" name="email" value="<?php if (set_value('email')) echo set_value('email');
                                                                else echo $user['email']; ?>" placeholder="Email" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm 
                            <?php if (form_error('email')) echo 'form_error border border-pink-500'; ?>">
                        <span class="text-xs text-pink-600"><?php echo form_error('email') ?></span>
                    </div>

                    <button type="submit" class="w-full px-3 py-2 bg-[#0E194F] text-white outline-none rounded-md text-sm">Submit changes</button>
                    <a href="<?php echo site_url('/user'); ?>" type="button" class="w-full px-3 py-2 text-[#0E194F] outline-none rounded-md text-sm text-center">Cancel</a>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('components/footer'); ?>
