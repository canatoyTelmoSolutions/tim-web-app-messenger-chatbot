<?php $this->load->view('components/header'); ?>

<div class="grid grid-cols-[250px_1fr]">
    <div class="">
        <?php $this->load->view('components/sidebar'); ?>
    </div>
    <div class="">
        <div class="">
            <?php $this->load->view('components/navbar'); ?>
        </div>

        <div class="px-10 py-10">
            <h1 class="text-2xl font-bold text-slate-800">Users</h1>

            <div class=""></div>
        </div>
    </div>
</div>

<?php $this->load->view('components/footer'); ?>