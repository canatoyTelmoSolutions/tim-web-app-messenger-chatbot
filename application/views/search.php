<?php $this->load->view('components/header'); ?>

<div class="grid md:grid-cols-[250px_1fr]">
    <div class="">
        <?php $this->load->view('components/sidebar'); ?>
    </div>
    <div class="">
        <div class="">
            <?php $this->load->view('components/navbar'); ?>
        </div>

        <div class="p-4 pt-[100px] md:px-10 py-[100px] cursor-default">
            <h1 class="text-md md:text-2xl font-bold text-slate-800">Search</h1>
            <p class="text-md md:text-sm font-normal text-slate-800">
                Showing (<?php echo number_format(count($users != NULL ? $users : [])); ?>) results for "<?php echo $q; ?>"
            </p>

            <?php if ($users != NULL) : ?>
            <div class="mt-4">
                <div class="mt-10 bg-white shadow-lg rounded-md border-2 border-[#e3e3e3] p-3">
                    <div class="">
                        <!-- component -->
                        <table class="min-w-full border-collapse block md:table text-sm ">
                            <thead class="block md:table-header-group">
                                <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                                    <th class="bg-[#0E194F] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Name</th>
                                    <th class="bg-[#0E194F] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">User Name</th>
                                    <th class="bg-[#0E194F] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Email Address</th>
                                    <th class="bg-[#0E194F] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Mobile</th>
                                </tr>
                            </thead>
                            <div class="">
                                <tbody class="block md:table-row-group overflow-scroll h-[200px]">
                                        <?php foreach ($users as $user) : ?>
                                            <tr class="bg-white border border-grey-500 md:border-none block md:table-row">
                                                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                                    <span class="inline-block w-1/3 md:hidden font-bold">Name</span>
                                                    <?php echo "{$user['firstname']} {$user['lastname']}" ?>
                                                </td>
                                                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                                    <span class="inline-block w-1/3 md:hidden font-bold">User Name</span>
                                                    <?php echo $user['username'] ?>
                                                </td>
                                                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                                    <span class="inline-block w-1/3 md:hidden font-bold">Email Address</span>
                                                    <?php echo $user['email'] ?>
                                                </td>
                                                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                                                    <span class="inline-block w-1/3 md:hidden font-bold">Mobile</span>
                                                    <?php echo $user['mobile_number'] ?>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                </tbody>
                            </div>
                        </table>
                    </div>
                </div>
            </div>
            <?php endif ?>
        </div>
    </div>
</div>