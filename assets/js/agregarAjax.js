
  $(document).ready(function() {

      $('#agregar').submit(function(e) {

          var nombre = $('#nombre').val();
          var apellidos = $('#apellidos').val();
          var edad = $('#edad').val();

          expresion = /^[a-zA-Z]*$/;
        
          if(nombre == " " || apellidos == " " || edad == " "){

            $("#validacionNombre").text('El campo Nombre es obligatorio.');
            $("#validacionApellidos").text('El campo Apellidos es obligatorio.');
            $("#validacionEdad").text('El campo Edad es obligatorio.');

            return false;

          }else if(!expresion.test(nombre)){

                document.querySelector("div[id='validacionNombre']").innerHTML += "El campo Nombre no permite ni números ni caracteres especiales.";

                return false;
          
            }else if(!expresion.test(apellidos)){

                document.querySelector("div[id='validacionApellidos']").innerHTML += "El campo Apellidos no permite ni números ni caracteres especiales.";

                return false;
            
            }else if(isNaN(edad)){

                document.querySelector("div[id='validacionEdad']").innerHTML += "El campo Edad solo permite números.";

                return false;

            }
        
          $.ajax({
              type: "GET",
              url: 'controller/controller_registro.php?operacion=Agregar',
              data: { 'nombre' : nombre,
                      'apellidos' : apellidos,
                      'edad' : edad
                      },

              success: function(html){
            
                // html = '<div class="alert alert-success alerta alert-dismissible fade show" role="alert"><strong>Registro agregado correctamente!</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

                $('#addEmployeeModal').modal('hide');
                // location.reload();
                // $('#mensaje').html(html);

             }
           
         });

            // e.preventDefault();

       }); 

     });
