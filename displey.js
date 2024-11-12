let cja1 = document.getElementById('cja1');
let cja2 = document.getElementById('cja2');
let btn = document.getElementById('btn1');
let gif = document.getElementById('gif');

btn.addEventListener('click',()=>{
    gif.style.display = 'block';
    cja1.style.display = 'none';
    
    setTimeout(() => {
        gif.style.display = 'none';
        cja2.style.display = 'block';
    }, 1000);
    
})