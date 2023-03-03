<?php $this->load->view('components/header'); ?>




<!-- <div class="grid grid-cols-[1fr_900px] flex ">
    <div class="bg-[#0E194F] grid place-items-center h-screen">
        <div class=" pl-10 ">
            <img src="assets/images/login.svg" alt="" class="content-center pt-10  ">
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


            <button type="submit" class="w-full px-3 py-2 bg-[#0E194F] text-white outline-none rounded-md text-sm">Create</button>
                    
            </form>
        </div>      
    </div>
</div> -->

<div class="container" id="container">
        <div class="form-container sign-up-container">
           <!--  <form action="#">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <div class="infield">
                    <input type="text" placeholder="Name" />
                    <label></label>
                </div>
                <div class="infield">
                    <input type="email" placeholder="Email" name="email"/>
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" placeholder="Password" />
                    <label></label>
                </div>
                <button>Sign Up</button>
              
            </form>
        </div>
        -->

        
<div class="overlay-container" id="overlayCon">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                <img src="assets/images/login.svg" alt="">
                </div>
                <div class="overlay-panel overlay-right">
                    <img src="assets/images/telmo.svg" alt="">
                </div>
            </div>
            <button id="overlayBtn">Sign or Login</button>
        </div>
    </div>

<?php $this->load->view('components/footer'); ?>

<script>
        const container= document.getElementById('container');
        const overlayCon= document.getElementById('overlayCon');
        const overlayBtn= document.getElementById('overlayBtn');

        overlayBtn.addEventListener('click',()=>{
            container.classList.toggle('right-panel-active');
        });
        
    </script>

<style>

:root {
    --linear-grad: linear-gradient(to right, #FFFFFF, #0E194F);
    --grad-clr1: #0E194F;
    --grad-clr2: #0E194F;
}

.overlay-container{
    position: absolute;
    top: 0;
    left: 60%;
    width: 40%;
    height: 100%;
    overflow: hidden;
    transition: transform 0.6s ease-in-out;
    z-index: 9;
}
#overlayBtn{
    cursor:pointer;
    position: absolute;
    left: 50%;
    top: 104px;
    transform: translateX(-50%);
    width: 143.67px;
    height: 40px;
    border: 1px solid #FFF;
    background: transparent;
}
.overlay{
    position: relative;
    background: var(--linear-grad);
    color: #FFF;
    left: -150%;
    height: 100%;
    width: 250%;
    transition: transform 0.6s ease-in-out;

}
.overlay-panel{
    position: absolute;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0px 40px;
    text-align: center;
    height: 100%;
    width: 340px;
    transition: 0.6s ease-in-out;
}
.overlay-left{
    right: 60%;
    transform: translateX(-12%);

}
.overlay-right{
    right: 0;
    transform: translateX(0%);
    
}
.overlay-left h1{
    color: #FFF;
}
p{
    font-size: 14px;
    font-weight: 300;
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 25px 0px 35px;
}
.overlay-panel button{
    border: none;
    background-color: transparent;
}
.right-panel-active .overlay-container{
    transform: translateX(-150%);
}
.right-panel-active .overlay{
    transform: translateX(50%);
}
.right-panel-active .overlay-left{
    transform: translateX(25%);
}
.right-panel-active .overlay-right{
    transform: translateX(35%);
}
.right-panel-active .sign-in-container{
    transform: translateX(20%);
    opacity: 0;
}
.right-panel-active .sign-up-container{
    transform: translateX(66.7%);
    opacity: 1;
    z-index: 5;
    animation: show 1.6s;
}
@keyframes show{
    0%, 50%{
        opacity: 0;
        z-index: 1;
    }
    50.1%, 100%{
        opacity: 1;
        z-index: 5;
    }
}

</style>
