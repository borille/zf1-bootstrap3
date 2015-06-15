//------------------------------------------------------------------------------
function confirmDeleteBs(redirectUrl) {

    divTag = $('<div/>');

    divTag.addClass('modal');
    divTag.addClass('fade');

    divTag.html('<div class="modal-dialog">\
        <div class="modal-content">\
        <div class="modal-header">\
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>\
            <h4>Confirmar Exclusão?</h4>\
        </div>\
        <div class="modal-body">\
            <p>Essa operação não poderá ser desfeita!</p>\
        </div>\
        <div class="modal-footer">\
            <a class="btn btn-default" href="' + redirectUrl + '"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Confirmar</a>\
            <a data-dismiss="modal" class="btn btn-primary"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Cancelar</a>\
        </div></div></div>');

    divTag.modal();
}
