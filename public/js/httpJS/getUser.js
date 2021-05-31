$(document).ready(function(){

    let btnEditUser = $('#btnEditUser');
    let btnEditEmail = $('#btnEditEmail');
    let btnEditDirecction = $('#btnEditDirecttion');
    let btneditBanck = $('#btnEditBanck');
//inputs de Usuario
    let inputNombreUser = $('#inputNombreUser');
    let input1Apellido = $('#input1Apellido');
    let input2Apellido = $('#input2Apellido');
    let inputEdad = $('#inputEdad');
    let inputGenero = $('#inputGenero');
//inputs de email
    let inputEmail = $('#inputEmail');
    let inputPassword = $('#inputPassword');
    let inputTipoUsuario = $('#inputTipoUsuario');
//inputs de direcction
    let inputCol = $('#inputCol');
    let inputNumero = $('#inputNumero');
    let inputCP = $('#inputCP');
    let inputCalle = $('#inputCalle');
    let inputLocalidad = $('#inputLocalidad');
    let inputEstado = $('#inputEstado');
    let inputReferencias = $('#inputReferencias');
//inputs de banck


//funciones

    function getConfig()
    {
        let idCategoria = this.id;
        axios.get('/configUser/'+idCategoria)
        .then(function (response) {
            inputNombreUser.val(response.data.name);
            input1Apellido.val(response.data.apellidop);
            input2Apellido.val(response.data.apellidom); 
            inputEdad.val(response.data.edad);
            inputGenero.val(response.data.genero); 
        }).catch(function (error){
            console.log(error.data);
            btnGetCategoria.removeAttr('disabled'); 
        }).finally( function (response){
            btnGetCategoria.removeAttr('disabled');
        });
    } 
});