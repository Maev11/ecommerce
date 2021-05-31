$(document).ready(function(){//implementación de JQuery 3.6.0

    let btnNewCategoria = $('#btnNewCategoria');
    let btnExitCategoria = $('#btnExitCategoria');
    let inputNameCategoria = $('#nameCategoria');
    let inputStatuCatagoria = $('#statuCategoria');
    let inputDescriptionCategoria = $('#descriptionCategoria');
    let formModalCategoria = $('#formCategoria');

    let btnGetCategoria =$('#btnGetCategoria');

    btnNewCategoria.on('click',createCategoria);
    btnExitCategoria.on('click',exitModal);

    var myModal = new bootstrap.Modal(document.getElementById('categoria'), {
        keyboard: false
    });

    function exitModal(){formModalCategoria[0].reset();myModal.hide();}

    function createCategoria()
    {   
        let tokenPost = $('input[name="_token"]').val();
        btnNewCategoria.attr('disabled', 'disabled');
        axios.post('/categoria', {
            NameCate:inputNameCategoria.val(),
            Description:inputDescriptionCategoria.val(),
            Status:inputStatuCatagoria.val(),
            _token:tokenPost,
        }).then(function (response) {
            console.log('creado'+ response);
            exitModal();
        }).catch(function (error){
            console.log(error.data);
            btnNewCategoria.removeAttr('disabled'); 
        }).finally( function (response){
            btnNewCategoria.removeAttr('disabled');
        });
    }

    function getCategoria()
    {   
        let idCategoria = this.id;
        btnGetCategoria.attr('disabled', 'disabled');
        axios.get('/categoria/'+idCategoria+'/edit')
        .then(function (response) {
            $('#nameCategoria').val(response.data.NameCate);
            $('#descriptionCategoria').val(response.data.Description);
            $('#statuCategoria').val(response.data.Status);
            myModal.show();
        }).catch(function (error){
            console.log(error.data);
            btnGetCategoria.removeAttr('disabled'); 
        }).finally( function (response){
            btnGetCategoria.removeAttr('disabled');
        });
    }

    function updateCategoria()
    {

    }
});