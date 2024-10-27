
document.querySelector('#Theme').addEventListener('click', () =>{
    document.documentElement.classList.toggle('Darktheme')
    let Theme = document.querySelector('#Theme')
    document.documentElement.classList.contains('Darktheme') ? localStorage.setItem('theme', 'dark') : localStorage.setItem('theme', 'light')
  
   Theme.innerHTML=== `<i class="gg-moon"></i>` ? Theme.innerHTML = `<i class="gg-sun"></i>` : Theme.innerHTML= `<i class="gg-moon"></i>`;
   
 })
 

const theme = localStorage.getItem('theme');
if (theme === 'dark') {
    let Theme = document.querySelector('#Theme')
    document.documentElement.classList.add('Darktheme');
    Theme.innerHTML = `<i class="gg-sun"></i>`
} else {
    document.documentElement.classList.remove('Darktheme');
    let Theme = document.querySelector('#Theme')
    Theme.innerHTML= `<i class="gg-moon"></i>`
}


const ShowBtn = document.querySelector('#show-btn');
const nextBtn = document.querySelector('#next-btn');
const meaning = document.querySelector('#meaning');
if(ShowBtn){
ShowBtn.addEventListener('click' , () => {
meaning.style.display = 'inherit';
nextBtn.style.display = 'inherit';
ShowBtn.style.display = 'none';
})
}


const input = document.querySelector("#search-input")
if(input) {
 input.addEventListener("input", (e) => {
    let query = e.target.value.toLowerCase().trim();
    const ul = document.getElementsByTagName('ul'); 

   
        for (let i = 0; i < ul.length; i++) {
            const text = ul[i].textContent.toLowerCase(); 
            if (text.includes(query)) {
                ul[i].style.display = ''; 
            } else {
                ul[i].style.display = 'none'; 
            }
        }
 });
}
 const notification = document.querySelector('.notif');

 if(notification) {
    setTimeout(() => {
       notification.innerHTML= "";
      }, 2000);
 }