$('#ModalSesion').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  
  var modal = $(this)
  modal.find('.modal-content').css({'width':'500px'})
  modal.find('.modal-dialog').css({'max-width':'400px','background-color':'rgba(0, 0, 0, 0.78)', 'color':'white','padding':'10px','border-radius':'6px'})
});