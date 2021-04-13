
document.addEventListener('DOMContentLoaded', function() {

      var calendarEl = document.getElementById('versario');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        //initialDate: '2017-01-01',
        timeZone: 'local' ,
        firstDay:'0',
        initialView: 'dayGridMonth',
        selectable: true,

        headerToolbar: {
                 left: 'prev,next today prevYear nextYear BtnBuscar',
                 center: 'title',
                 right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
        },

        customButtons : {
            BtnBuscar : {
                text : "Agregar versículo",
                click:function(){
                    limpiarFormulario();
                    $('#agregarVersoModal').modal();

                }
            }
        },

        dateClick: function(info) {

            limpiarFormulario();
            $('#txtFecha').val(info.dateStr);
            $('#agregarVersoModal').modal();

            $("#btnAgregar").prop("disabled",false);
            $("#btnModificar").prop("disabled",true);
            $("#btnEliminar").prop("disabled",true);

          },

          eventClick: function(info) {

            $("#btnAgregar").prop("disabled",true);
            $("#btnModificar").prop("disabled",false);
            $("#btnEliminar").prop("disabled",false);

              let title = info.event.title;
              let descripcion = info.event.extendedProps.descripcion;
              let textColor = info.event.backgroundColor;

              mes  = (info.event.start.getMonth()+1);
              dia  = (info.event.start.getDate());
              anio = (info.event.start.getFullYear());

              mes=(mes<10)?"0"+mes:mes;
              dia=(dia<10)?"0"+dia:dia;

              fecha = (anio+"-"+mes+"-"+dia);

              $('#txtID').val(info.event.id);
              $('#txtTitle').val(title);
              $('#txtDescripcion').val(descripcion);
              $('#txtFecha').val(fecha);
              $('#txtColor').val(textColor);
              $('#agregarVersoModal').modal();

        },

         events: "versiculos/show"

     });

      calendar.setOption('locale', 'es');
      calendar.render();

      $('#btnAgregar').click(function(){
         ObjVersiculo=recoletarDatosGUI("POST");
         EnviarInformacion('',ObjVersiculo);
      });

      $('#btnEliminar').click(function(){
        ObjVersiculo=recoletarDatosGUI("DELETE");
        EnviarInformacion('/'+$('#txtID').val(),ObjVersiculo);
     });

     $('#btnModificar').click(function(){
        ObjVersiculo=recoletarDatosGUI("PATCH");
        EnviarInformacion('/'+$('#txtID').val(),ObjVersiculo);
     });

      function recoletarDatosGUI(method){

        nuevoVersiculo={

            id: $('#txtID').val(),
            title: $('#txtTitle').val(),
            descripcion: $('#txtDescripcion').val(),
            color: $('#txtColor').val(),
            start:$('#txtFecha').val(),

            '_token': $("meta[name='csrf-token']").attr("content"),
            '_method': method
        }

        return (nuevoVersiculo);

      }

        function EnviarInformacion(accion, objVersiculo){

            $.ajax(
                {
                    type: "POST",
                     url: "versiculos"+accion,
                    data: ObjVersiculo,
                 success:function(){
                  displayMsgError('Guardando');

                  $('#agregarVersoModal').modal('toggle');
                  calendar.refetchEvents();

                },
                   error:function(){
                    displayMsgError('Error'); }

                }
            );
        }

        function limpiarFormulario(){

            $('#txtTitle').val("");
            $('#txtDescripcion').val("");
            $('#txtFecha').val("");
            $('#txtColor').val("");

        }

            function displayMsgError(message) {
                Swal.fire({
                    title: 'Procesando...',
                    html: 'Realizando acciones en <strong></strong> segundos.',
                    timer: 1500, //tiempo del timer
                    onBeforeOpen: () => {
                      Swal.showLoading()
                      timerInterval = setInterval(() => {
                        Swal.getContent().querySelector('strong')
                          .textContent = Swal.getTimerLeft()
                      }, 100)
                    },
                    onClose: () => {
                      clearInterval(timerInterval)
                    }
                  }).then((result) => {
                    if (
                      // Read more about handling dismissals
                      result.dismiss === Swal.DismissReason.timer
                    ) {
                      console.log('I was closed by the timer')
                    }
                  });

        }

});
