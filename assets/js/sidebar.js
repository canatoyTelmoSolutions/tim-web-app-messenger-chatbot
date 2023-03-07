
const sidebar = document.getElementById('sidebar')

function openNav() {
  document.getElementById("sidebar").style.left = "0";

}

function closeNav() {
  document.getElementById("sidebar").style.left = "-1000px";
}


function openImg() {
  const imgInput = document.getElementById('imgInput')

  imgInput.click()
}

function loadInputImgToSrc(event) {
  const reader = new FileReader();
  reader.readAsDataURL(event.target.files[0]);

  reader.onload = () => {
    document.getElementById("img").src = reader.result
  };
}
