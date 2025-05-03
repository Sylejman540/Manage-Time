let icon = document.getElementById("icon");

icon.addEventListener('click', changeIcon);

function changeIcon(){
    if(icon.src.includes('menu.png')){  // Checking if the src includes "menu.png"
        icon.src = 'images/x-symbol.png';  // Change the image source to 'x-symbol.png'
    } else {
        icon.src = 'images/menu.png';  // Change the image back to 'menu.png'
    }

    let nav = document.getElementById("nav");

    if(nav.style.display === 'flex'){
        nav.style.display = 'none';
    }else{
        nav.style.display = 'flex';
    }


}

setInterval(() => {
    let changeImage = document.getElementById("changeImage");

    // Check the file name and toggle between images
    if (changeImage.src.includes("contact(1).jpg")) {
        changeImage.src = "images/contact(2).jpg";
    } else {
        changeImage.src = "images/contact(1).jpg";
    }
}, 5000);
