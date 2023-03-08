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
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-bold text-slate-800">Users</h1>
                <a href="<?php echo site_url('/user/create'); ?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-green-500 rounded">Create</a>

            </div>

            <div class="mt-5">
                <table class="min-w-full border-collapse block md:table text-sm">
                    <thead class="block md:table-header-group">
                        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                            <th class="bg-[#0E194F] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Name</th>
                            <th class="bg-[#0E194F] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">User Name</th>
                            <th class="bg-[#0E194F] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Birthdate</th>
                            <th class="bg-[#0E194F] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Age</th>
                            <th class="bg-[#0E194F] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Gender</th>
                            <th class="bg-[#0E194F] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Home Address</th>
                            <th class="bg-[#0E194F] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Email Address</th>
                            <th class="bg-[#0E194F] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Mobile</th>
                            <th class="bg-[#0E194F] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Actions</th>

                        </tr>
                    </thead>
                    <tbody class="block md:table-row-group">
                        <?php if ($users) : ?>
                            <?php foreach ($users as $user) : ?>
                                <tr class="bg-white border border-grey-500 md:border-none block md:table-row">
                                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Name</span>
                                        <?php echo "{$user['firstname']} {$user['lastname']}"; ?>
                                    </td>
                                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">User Name</span>
                                        <?php echo $user['username'] ?>
                                    </td>
                                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Birthdate</span>
                                        <?php echo $user['birthdate'] ?>
                                    </td>
                                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Age</span>
                                        <?php echo $user['age'] ?>
                                    </td>
                                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">gender</span>
                                        <?php echo $user['gender'] ?>
                                    </td>
                                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Home Address</span>
                                        <?php echo $user['address'] ?>
                                    </td>
                                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Email Address</span>
                                        <?php echo $user['email'] ?>
                                    </td>
                                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <span class="inline-block w-1/3 md:hidden font-bold">Mobile</span>
                                        <?php echo $user['mobile_number'] ?>
                                    </td>
                                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                        <?php echo form_open('/user/delete/' . $user['id']); ?>
                                        <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                                        <a href="<?php echo site_url('/user/edit/' . $user['id']); ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded"><i class="fad fa-edit"></i></a>
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">
                                            <i class="fad fa-trash"></i>
                                        </button>
                                        <?php echo form_close(); ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('components/footer'); ?>