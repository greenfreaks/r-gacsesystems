
let formLog = document.getElementById('userLog');
let formReg = document.getElementById('userReg');
let btnRegistrate = document.getElementById('btnRegistrate');
let btnIngresar = document.getElementById('btnIngresar');

formReg.style.display = "none";

btnRegistrate.onclick = () =>{
    formReg.style.display = "block";
    formLog.style.display = "none";
}

btnIngresar.onclick = () =>{
    formReg.style.display = "none";
    formLog.style.display = "block";
}

