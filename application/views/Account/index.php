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
            <h1 class="text-2xl font-bold text-slate-800">Account</h1>

            <div class=""></div>
        </div>
    </div>
</div>

<?php $this->load->view('components/footer'); ?>