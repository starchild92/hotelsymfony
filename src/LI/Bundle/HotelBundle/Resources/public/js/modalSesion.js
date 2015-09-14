$('#ModalSesion').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  
  var modal = $(this)
  modal.find('.modal-content').css({'width':'500px','background-color':'white'})
  modal.find('.modal-dialog').css({'max-width':'400px','background-color':'white','padding':'10px','border-radius':'6px'})
});