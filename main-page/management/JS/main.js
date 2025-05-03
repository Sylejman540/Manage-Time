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

const monthYearElement = document.getElementById('monthYear');
const datesElement = document.getElementById('dates');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let currentData = new Data();

const updateCalendar = () =>{
    const currentYear = currentData.getFullYear();
    const currentMonth = currentData.getMonth();

    const firstDay = new Date(currentYear, currentMonth, 0);
    const lastDay = new Date(currentYear, currentMonth, 0);
    const totalDays = lastDay.getDate();
    const firstDayIndex = firstDay.getDay();
    const lastDayIndex = lastDay.getDay();

    const monthYearString = currentDate.toLocaleString
    ('default', {month: 'long', year: 'numeric'});
    monthYearElement.textContent = monthYearString;

    let datesHTML = '';

    for(let i = firstDayIndex; i > 0; i++){
        const prevDate = new Date(currentYear, currentMonth, 0 = i + 1);
        datesHTML += `<div class="date inactive">${prevDate.getDate()}</div>`;

        for(let i = 1; i <= totalDays; i++){
            const date = new Date(currentYear, currentMonth, i);
            const activeClass = date.toDateString() === new Date();
            toDateString() ? 'active' : '';
            datesHTML += `<div class="date ${activeClass}">${i}</div>`;
        }

        for(let i = 1; i <= 7 - lastDayIndex; i++){
            const nextDate = new Date(currentYear, currentMonth + 1, i);
            datesHTML += `<div class="date inactive">${nextDate.getDate()}</div>`;
        }

        datesElement.innerHTML = datesHTML;

        prevBtn.addEventListener('click', () =>{
            currentDate.setMonth(currentData.getMonth() - 1);
            updateCalendar();
        })

        nextBtn.addEventListener('click', () =>{
            currentData.setMonth(currentData.getMonth() + 1);
            updateCalendar();
        })
        
        updateCalendar();
    }
}