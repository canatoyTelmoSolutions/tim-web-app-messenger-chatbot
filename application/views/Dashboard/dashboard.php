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
            <h1 class="text-2xl font-bold text-slate-800">Dashboard</h1>

            <div class="mt-4">
                <div class="grid grid-cols-3 gap-4">
                    <div class="shadow-md p-4 px-4 bg-white rounded-md border-2 border-[#e3e3e3]">
                        <div class="flex items-center text-xl">
                            <i class="far fa-users mr-2"></i>
                            <h2 class="font-bold text-slate-800">Users</h2>
                        </div>

                        <div class="flex justify-between">
                            <div class=""></div>
                            <div class="font-bold text-6xl text-[#0E194F]">23</div>
                        </div>
                    </div>
                    <div class="shadow-md p-4 bg-white rounded-md border-2 border-[#e3e3e3]">
                        <div class="flex items-center text-xl">
                            <i class="far fa-users mr-2"></i>
                            <h2 class="font-bold text-slate-800">Users</h2>
                        </div>

                        <div class="flex justify-between">
                            <div class=""></div>
                            <div class="font-bold text-6xl text-[#0E194F]">23</div>
                        </div>
                    </div>
                    <div class="shadow-md p-4 bg-white rounded-md border-2 border-[#e3e3e3]">
                        <div class="flex items-center text-xl">
                            <i class="far fa-users mr-2"></i>
                            <h2 class="font-bold text-slate-800">Users</h2>
                        </div>

                        <div class="flex justify-between">
                            <div class=""></div>
                            <div class="font-bold text-6xl text-[#0E194F]">23</div>
                        </div>
                    </div>
                </div>

                <div class="mt-10 bg-white shadow-lg rounded-md border-2 border-[#e3e3e3] p-3">

                <h1 class="font-bold mb-2 text-slate-800">Recently added</h1>

                    <div class="">
                        <!-- component -->
<table class="min-w-full border-collapse block md:table text-sm">
		<thead class="block md:table-header-group">
			<tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
				<th class="bg-[#0E194F] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Name</th>
				<th class="bg-[#0E194F] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">User Name</th>
				<th class="bg-[#0E194F] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Email Address</th>
				<th class="bg-[#0E194F] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Mobile</th>
			</tr>
		</thead>
		<tbody class="block md:table-row-group">
			<tr class="bg-white border border-grey-500 md:border-none block md:table-row">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Name</span>Jamal Rios</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">User Name</span>jrios1</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Email Address</span>jrios@icloud.com</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Mobile</span>582-3X2-6233</td>

			</tr>
			<tr class="bg-white border border-grey-500 md:border-none block md:table-row">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Name</span>Erwin Campbell</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">User Name</span>ecampbell088</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Email Address</span>ecampbell088@hotmail.com</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Mobile</span>318-685-X414</td>

			</tr>
			<tr class="bg-white border border-grey-500 md:border-none block md:table-row">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Name</span>Lillie Clark</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">User Name</span>lillie</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Email Address</span>lillie.clark@gmail.com</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Mobile</span>505-644-84X4</td>
			</tr>
			<tr class="bg-white border border-grey-500 md:border-none block md:table-row">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Name</span>Maribel Koch</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">User Name</span>maribelkoch</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Email Address</span>mkoch@yahoo.com</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Mobile</span>582-400-3X36</td>
			</tr>			
		</tbody>
	</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('components/footer'); ?>