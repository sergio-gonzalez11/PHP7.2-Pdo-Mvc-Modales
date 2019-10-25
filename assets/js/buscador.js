// $(document).ready(function(){
    
//     $('#buscador').focus()
  
//     $('#buscador').on('keyup', function(){

//       var buscador = $('#buscador').val()
      
//       $.ajax({

//         type: 'GET',
//         url: 'controller/controller_registro.php?operacion=Buscar&cadena=buscador',
//         data: {'buscador': buscador},

//         beforeSend: function(){
//           $('#resultado').html('<img src="img/pacman.gif">')
//         }
//       })
//       .done(function(resultado){
//         $('#resultado').html(resultado)
//       })
//       .fail(function(){
//         alert('Hubo un error');
//       })
//     })
//   })