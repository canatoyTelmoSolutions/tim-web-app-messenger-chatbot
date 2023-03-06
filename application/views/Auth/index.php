<?php $this->load->view('components/header'); ?>

<!-- Sign Up -->
<div class="grid grid-cols-[1fr_600px] flex " id="login-form">
    <div class=" grid items-center h-screen bg-gradient-to-br from-white via-sky-100 to-indigo-800 min-h-fit">
        <div class=" pl-10">
            <img src="assets/images/login.svg" alt="" class="box bounce-1 ">
        </div>
    </div>
    <div class=" grid place-items-center">
        <div class="px-10 w-[600px]">
            <div class="">
                <img src="assets/images/telmo.svg" alt="" class="mx-auto" />
            </div>

            <form class="grid gap-4" method="POST" action="<?php echo base_url('login') ?>">
                <div class="">
                    <p class="text-sm mb-1">Email</p>
                    <input type="email" name="email" autocomplete="off" value="<?php if (set_value('email')) echo set_value('email'); ?>" <?php if (!form_error('email')) echo 'autofocus'; ?> placeholder="example@mail.com" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm
                    <?php if (form_error('email') or $this->session->flashdata('denied') and !form_error('password')) echo 'form_error border border-pink-500'; ?>">
                    <span class="text-xs text-pink-600">
                        <?php if (form_error('email')) echo form_error('email');
                        elseif ($this->session->flashdata('denied') and !form_error('password')) {
                            echo $this->session->flashdata('denied');
                            session_regenerate_id();
                        } ?>
                    </span>
                </div>
                <div class="">
                    <p class="text-sm mb-1">Password</p>
                    <input type="password" name="password" autocomplete="off" placeholder="password" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm
                    <?php if (form_error('password')) echo 'form_error border border-pink-500'; ?>">
                    <span class="text-xs text-pink-600"><?php echo form_error('password') ?></span>
                    <div class="flex items-center justify-between mt-1">
                        <div class=""></div>
                        <a href="<?php echo site_url('/auth/forgotpassword'); ?>" class="text-xs cursor-pointer transition-all">Forgot password?</a>
                    </div>
                </div>
                <button type="submit" class="w-full px-3 py-2 bg-[#0E194F] text-white outline-none rounded-md text-sm">Login</button>
            </form>
        </div>
    </div>
</div>
<?php $this->load->view('components/footer'); ?>

<style>
    .box {
        align-self: flex-end;
        animation-duration: 5s;
        animation-iteration-count: infinite;
        margin: 0 auto 0 auto;
        transform-origin: bottom;
        width: 500px;
    }

    .bounce-1 {
        animation-name: bounce-1;
        animation-timing-function: linear;
    }

    @keyframes bounce-1 {
        0% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-10px);
        }

        100% {
            transform: translateY(0);
        }
    }
</style>
