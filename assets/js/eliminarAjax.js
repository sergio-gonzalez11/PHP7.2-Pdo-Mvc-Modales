
  $(document).ready(function() {

     $('#eliminar').submit(function(e) {
      
      var id_registro = $('#id_registro').val();
      
      $.ajax({
          type: "GET",
          url: 'controller/controller_registro.php?operacion=Eliminar&id_registro=id_registro',
          data: {'id_registro' : id_registro },

          success: function(){
      
              html = '<div class="alert alert-success alerta alert-dismissible fade show" role="alert"><strong>Registro eliminado correctamente!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

              $('#deleteEmployeeModal').modal('hide');
              
              // location.reload();

              $('#mensaje').html(html);

              // $('#mensaje').html('<div class="alert alert-success alerta" role="alert">Registro eliminado correctamente!</div>');

          }
         
     });

     e.preventDefault();
     
   });



});
