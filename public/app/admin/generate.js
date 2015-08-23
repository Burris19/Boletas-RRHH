$(function(){

$('#btn-open-wizard').click(function(e) {
    $("#page").load("ballots/create");
});

$('.edit').click(function(e){
    $url = 'ballots/' + $(this).data('id') + '/edit';
    $("#page").load($url);
    Helper.unblockPage();
    e.preventDefault();

});

$('[name = "finish"]').click(function(){
    $('[name = "finish"]').prop('disabled',true);
    CRUD.action('#form-create', function(response){
        $('[name = "finish"]').prop('disabled',false);
        window.open('pdf/' + response.id,'_blank');
        $('#page').load('ballots');
    });
});

$('[name = "update"]').click(function(){
    var id = $('#numeroId').val();
    $('[name = "update"]').prop('disabled',true);
    var data = CRUD.prepareData('#form-edit');
    form = $('#form-edit');
    $.ajax({
        url: 'ballots/' + id,
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        type: form.prop('method'),
        success: function(response){
          window.open('pdf/' + response.id,'_blank');
          $('#page').load('ballots');
        },
        error: function(xhr,ajaxOptions,thrownError){
            console.log(xhr.status);
            console.error(thrownError);
        }
    });
});

});
