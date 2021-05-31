$(document).ready(function(){
    var inputEmail = $('#email');
    var inputPassword = $('#password');
    var inputConfirmPassword =$('#confirmPassword');
    var smEmail = $('#sm-email');
    var smPassword = $('#sm-password');
    var smContent =$('#sm-content');
    var token = $('input[name="_token"]').attr('content');

    inputEmail.on('blur',function(){ validateEmail() });
    inputConfirmPassword.on('blur',function(){ validatePassword()});
    
    function validateEmail()
    {    
        if(inputEmail.val() != 0){
            inputEmail.removeClass('is-invalid is-valid');
            inputEmail.attr('disabled', 'disabled');
            axios.post('validarUsuario',{
                email: inputEmail.val(),
                _token: token
            }).then(function(response){
                response.data == true? mensaje(true,'E-mail ya existente',inputEmail,smEmail) :  mensaje(false,'E-mail valido',inputEmail,smEmail);
            }).catch(function(error){
                alert('Problemas de servidor');
            }).finally(()=>{
                inputEmail.removeAttr('disabled');
            });
        }else{
            mensaje(true,'Ingrese un correo',inputEmail,smEmail);
        }
    }

    function validatePassword()
    {   
        
        inputPassword.removeClass('is-invalid is-valid');
        if(inputPassword.val() != 0 && inputConfirmPassword != 0){
            if(inputPassword.val().trim() == inputConfirmPassword.val().trim()){
                mensaje(false,'La contraseña coincide',inputPassword,smPassword);
            }else{
                mensaje(true,'La contraseña no coincide',inputPassword,smPassword);
            }
        }else{
            mensaje(true,'Ingrese una contraseña',inputPassword,smPassword);
        }
        
    }

    function mensaje(status,sm,etiqueta,parametro)
    {   
        parametro.removeClass('valid-feedback invalid-feedback');
        let tipe = status == true? 'is-invalid': 'is-valid';
        let tipo = status == true? 'invalid-feedback' : 'valid-feedback';
        etiqueta.addClass(''+tipe);
        parametro.addClass(''+tipo);
        (smPassword == parametro)? $('#sm-password').text(sm) : $('#sm-email').text(sm);
        parametro.show();
    }

});