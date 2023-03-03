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
            <h1 class="text-md md:text-2xl font-bold text-slate-800">Dashboard</h1>

            <div class="mt-4">
                <div class="grid md:grid-cols-3 gap-4">
                    <div class="shadow-md p-4 px-4 bg-white rounded-md border-2 border-[#e3e3e3]">
                        <div class="flex items-center text-xl">
                            <i class="far fa-users mr-2"></i>
                            <h2 class="font-bold text-slate-800">Users</h2>
                        </div>

                        <div class="flex justify-between">
                            <div class=""></div>
                            <div class="font-bold text-6xl text-[#0E194F] card1"><?php echo $users; ?></div>
                        </div>
                    </div>
                    <div class="shadow-md p-4 bg-white rounded-md border-2 border-[#e3e3e3]">
                        <div class="flex items-center text-xl">
                            <i class="far fa-users mr-2"></i>
                            <h2 class="font-bold text-slate-800">Users</h2>
                        </div>

                        <div class="flex justify-between">
                            <div class=""></div>
                            <div class="font-bold text-6xl text-[#0E194F] card2"><?php echo $users; ?></div>
                        </div>
                    </div>

                    <div class="shadow-md p-4 bg-white rounded-md border-2 border-[#e3e3e3]">
                        <div class="flex items-center text-xl">
                            <i class="far fa-users mr-2"></i>
                            <h2 class="font-bold text-slate-800">Users</h2>
                        </div>

                        <div class="flex justify-between">
                            <div class=""></div>
                            <div class="font-bold text-6xl text-[#0E194F] card3"><?php echo $users; ?></div>
                        </div>
                    </div>
                </div>

				<!-- I Add a here the script because it is not running when i pasted on Dashboard js  -->
				<script>
					// this is the script of the first card
					$({ Counter: 0 }).animate({
						Counter: $('.card1').text()
					}, {
						duration: 3000,
						easing: 'swing',
						step: function() {
							$('.card1').text(Math.ceil(this.Counter));
						}
					});

					// this is the script of the second card
					$({ Counter: 0 }).animate({
						Counter: $('.card2').text()
					}, {
						duration: 3000,
						easing: 'swing',
						step: function() {
							$('.card2').text(Math.ceil(this.Counter));
						}
					});

					// this is the script of the third card
					$({ Counter: 0 }).animate({
						Counter: $('.card3').text()
					}, {
						duration: 3000,
						easing: 'swing',
						step: function() {
							$('.card3').text(Math.ceil(this.Counter));
						}
					});
				</script>

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
                                <?php if ($recent_users) : ?>
                                    <?php foreach ($recent_users as $user) : ?>
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
                                <?php endif ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('components/footer'); ?>
