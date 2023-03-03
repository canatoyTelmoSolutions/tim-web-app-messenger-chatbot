<?php $this->load->view('components/header'); ?>

<!-- Sign Up -->
<div class="grid grid-cols-[1fr_600px] flex " id="login-form">
    <div class="bg-[#0E194F] grid place-items-center h-screen">
        <div class=" pl-10 ">
            <img src="/assets/images/login.svg" alt="" class="content-center pt-10  ">
        </div>
    </div>
    <div class=" grid place-items-center">
        <div class="px-10 w-[400px]">
            <div class="">
            <img src="assets/images/telmo.svg" alt="" class="mx-auto" />    
            </div>

            <form class="grid gap-4">
            <div class="">
                <p class="text-sm mb-1">First name</p>
                <input type="text" name="firstname" placeholder="First name" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm">
            </div>
            <div class="">
                <p class="text-sm mb-1">First name</p>
                <input type="text" name="firstname" placeholder="First name" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm">
           
                
                <div class="flex items-center justify-between mt-1">
                    <div class=""></div>
                    <a href="#" class="text-xs cursor-pointer transition-all">Forget password?</a>
                </div>
            </div>


            <button  class="w-full px-3 py-2 bg-[#0E194F] text-white outline-none rounded-md text-sm">Login</button>
                    
            </form>
            <div  class="w-full px-3 py-2 float-right outline-none rounded-md text-sm button" id="show-registration-form">New here? Register.</div>
        </div>      
    </div>
</div>

<!-- Rgister -->
<div class=""id="registration-form" style="display:none;">
    <div class=" grid place-items-center h-screen grid grid-cols-[1fr_1000px] flex ">
        <div class=" pl-10 ">
            <div class="px-10 w-[400px]">
                <div class="">
                <img src="assets/images/telmo.svg" alt="" class="mx-auto" />    
                </div>

                <form class="grid gap-4">
                <div class="">
                    <p class="text-sm mb-1">Registration</p>
                    <input type="text" name="firstname" placeholder="First name" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm">
                </div>
                <div class="">
                    <p class="text-sm mb-1">First name</p>
                    <input type="text" name="firstname" placeholder="First name" class="w-full px-3 py-2 bg-gray-200 outline-none rounded-md text-sm">
            
                    
                    <div class="flex items-center justify-between mt-1">
                        <div class=""></div>
                        <a href="#" class="text-xs cursor-pointer transition-all">Forget password?</a>
                    </div>
                </div>
                <button  class="w-full px-3 py-2 bg-[#0E194F] text-white outline-none rounded-md text-sm" id="show-login-form">Login</button>
                </form>
            </div>     
        </div>
        <div class="bg-[#0E194F] w-full h-screen"><img src="<?php echo site_url(); ?> . '/images/login.svg" alt="" class="content-center pt-10  "></div>
    </div>
    <div class="bg-[#0E194F] grid place-items-center">
             
        
    </div>
</div>
</div>
<?php $this->load->view('components/footer'); ?>

<script>

        const registrationForm = document.getElementById("registration-form");
		const loginForm = document.getElementById("login-form");
		const showRegistrationButton = document.getElementById("show-registration-form");
		const showLoginButton = document.getElementById("show-login-form");

		showRegistrationButton.addEventListener("click", function() {
			registrationForm.style.display = "block";
			loginForm.style.display = "none";
		});

		showLoginButton.addEventListener("click", function() {
			registrationForm.style.display = "none";
			loginForm.style.display = "block";
		});
</script>