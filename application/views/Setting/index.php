<?php $this->load->view('components/header'); ?>

<style>

.show {display: block;}
</style>

<div class="grid md:grid-cols-[250px_1fr]">
    <div class="">
        <?php $this->load->view('components/sidebar'); ?>
    </div>
    <div class="">
        <div class="">
            <?php $this->load->view('components/navbar'); ?>
        </div>

        <div class="p-4 pt-[100px] md:px-10 py-[100px]">

            <div class="items-center    ">
                
							<div class="flex items-center justify-center relative">
								<img src="https://i.pinimg.com/originals/a8/bc/90/a8bc90ea196737604770aaf9c2d56a51.jpg" class="rounded-full w-32 absolute top-10 transform -translate-y-1/2">

								<div>
									<img type="button" src="assets/images/setting.svg" onclick="drop()" class="dropbtn rounded-full w-7 absolute top-[75px] ml-[550px] transform -translate-y-1/2 cursor-pointer">

									<div id="myDropdown" class="dropdown-content bg-white rounded absolute hidden z-1 drop-shadow-lg overflow-auto min-w-[150px] top-[100px] left-[700px]">

										<div class="color-#000000 text-decoration-none p-4">

											<a href="#edit" class="py-[12px] px-[16px] block hover:bg-[#ddd] flex place-content-evenly">
												<i class="fa-solid fa-pen-to-square pr-4 "></i>
												<h2>Edit account</h2>
											</a>

											<a href="#password" class="py-[12px] px-[16px] block hover:bg-[#ddd] flex place-content-evenly">
												<i class="fa-solid fa-key pr-4 "></i>
												<h2>Edit password</h2>
											</a>

											<a href="#disable" class="py-[12px] px-[16px] block hover:bg-[#ddd] flex place-content-evenly bg-[#FF0000]">
											<i class="fa-solid fa-user-slash pr-4 color-white"></i>
												<h2>Disable account</h2>
											</a>

										</div>

									</div>
								</div>

								<h1 class="rounded-full w-32 absolute top-20 transform pl-[43px] pt-[25px] -translate-y-3/2">
									<p class="text-s"> <?php echo $this->session->userdata('user')['role']; ?></p>
								</h1>

					<div class="bg-white px-[40px] w-[583.67px]  mt-[50px] h-[450px] rounded-lg pt-[90px]">
						
						<div class="grid gap-2 mb-2 md:grid-cols-2">
							<div>
								<label for="first_name" class="block text-sm font-medium text-gray-900 dark:text-black">First name</label>
								<input type="text" id="first_name" class="bg-gray-50  text-black-900 text-sm rounded-lg block w-full p-2.5 " value="<?php echo "{$this->session->userdata('user')['firstname']}";?>" disabled>
							</div>

							<div>
								<label for="last_name" class="block text-sm font-medium text-gray-900 dark:text-black">Last name</label>
								<input type="text" id="first_name" class="bg-gray-50  text-black-900 text-sm rounded-lg block w-full p-2.5 " value="<?php echo "{$this->session->userdata('user')['lastname']}";?>" disabled>
							</div>

							<div>
								<label for="age" class="block text-sm font-medium text-gray-900 dark:text-black">Age</label>
								<input type="text" id="first_name" class="bg-gray-50  text-black-900 text-sm rounded-lg block w-full p-2.5 " placeholder="John" disabled>
							</div>  
								<div>
										<label for="gender" class="block text-sm font-medium text-gray-900 dark:text-black">Gender</label>
										<input type="text" id="first_name" class="bg-gray-50  text-black-900 text-sm rounded-lg block w-full p-2.5 " placeholder="John" disabled>
								</div>
						</div>

						<div class="mb-2">
								<label for="email" class="block  text-sm font-medium text-gray-900 dark:text-black">Address</label>
								<input type="text" id="first_name" class="bg-gray-50  text-black-900 text-sm rounded-lg block w-full p-2.5 " placeholder="John" disabled>
						</div> 

						<div class="mb-2">
								<label for="email" class="block  text-sm font-medium text-gray-900 dark:text-black">Email</label>
								<input type="text" id="first_name" class="bg-gray-50  text-black-900 text-sm rounded-lg block w-full p-2.5 " placeholder="John" disabled>
						</div> 

						<div class="grid gap-6 mb-6 md:grid-cols-2">
								<div>
										<label for="mobile_number" class="block text-sm font-medium text-gray-900 dark:text-black">Mobile number</label>
										<input type="text" id="first_name" class="bg-gray-50  text-black-900 text-sm rounded-lg block w-full p-2.5 " placeholder="John" disabled>
								</div>
								
								<div>
										<label for="password" class="block text-sm font-medium text-gray-900 dark:text-black">Password</label>
										<input type="text" id="first_name" class="bg-gray-50  text-black-900 text-sm rounded-lg block w-full p-2.5 " placeholder="John" disabled>
								</div>
					
								</div>
					</div>

            </div>
        </div>
    </div>
</div>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function drop() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<?php $this->load->view('components/footer'); ?>
