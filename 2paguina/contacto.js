
var Nombre =document.getElementById('Nombre');
var Email =document.getElementById('Email');
var Asunto =document.getElementById('Asunto');
var Pais =document.getElementById('Pais');
var mensaje =document.getElementById('Mensaje');

function enviarFormulario(){
	console.log('enviando formulario...');
	var mensajesError=[];

	if (Nombre.value===null || nombre.value==='') {
mensajesError.push('Ingresa tu nombre ');
	}
	if (Email.value===null || nombre.value==='') {
mensajesError.push('Ingresa tu Email ');
}
if (Asunto.value===null || nombre.value==='') {
mensajesError.push('Ingresa tu Asunto ');
	}
	if (Pais.value===null || nombre.value==='') {
mensajesError.push('Ingresa tu Pais ');

}
	if (Mensaje.value===null || nombre.value==='') {
mensajesError.push('Ingresa tu Mensaje ');
}
error.innerHTML=mensajesError.join(',');

}