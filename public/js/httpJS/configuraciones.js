$(document).ready(function(){
    let btnConfiguraciones = $("#configuraciones");

    var myModal = new bootstrap.Modal(document.getElementById('configuracion'), {
        keyboard: false
    });

    btnConfiguraciones.click(function() {
        console.log('aqui');
        btnConfiguraciones.attr('disabled', 'disabled');
        axios.get('configUser')
        .then(function (response) {
            $('#inputNombreUser').val(response.data.name);
            $('#input1Apellido').val(response.data.apaterno);
            $('#input2Apellido').val(response.data.amaterno);
            $('#inputEdad').val(response.data.fechaNacimiento);
            $('#inputGenero').val(response.data.genero);
            myModal.show();
        }).catch(function (error){
            console.log(error.data);
            btnConfiguraciones.removeAttr('disabled'); 
        }).finally( function (response){
            btnConfiguraciones.removeAttr('disabled');
        });

    });
});