


function valida_envia(){ 
   	//valido el nombre 
     var valor1=document.validacion.validacion1.value;
     var valor2=document.validacion.validacion2.value;
     var valor3=document.validacion.validacion3.value;
      var valor4=document.validacion.validacion4.value;
      var valor5=document.validacion.validacion5.value;
      var valor6=document.validacion.validacion6.value;
      var valor7=document.validacion.validacion7.value;
      var valor8=document.validacion.validacion8.value;
      var valor9=document.validacion.validacion9.value;
   	if (valor1.length==0 || valor2.length==0 ||valor3.length==0 ||valor4.length==0 || valor5.length==0 ||valor6.length==0 ||valor7.length==0 || valor8.length==0 ||valor9.length==0 ){ 
      	alert("Todos los campos son requeridos") 
      	
   	}
     else{
      document.validacion.submit();
    }
      
   }
   function editarClien(){
   var valor1=document.editarCliente.validacion1.value;
   var valor2=document.editarCliente.validacion2.value;
   var valor3=document.editarCliente.validacion3.value;
   var valor4=document.editarCliente.validacion4.value;
   var valor5=document.editarCliente.validacion5.value;
   var valor6=document.editarCliente.validacion6.value;
   var valor7=document.editarCliente.validacion7.value;
   var valor8=document.editarCliente.validacion8.value;
   var valor9=document.editarCliente.validacion9.value;
  if (valor1.length==0 || valor2.length==0 ||valor3.length==0 ||valor4.length==0 || valor5.length==0 ||valor6.length==0 ||valor7.length==0 || valor8.length==0 ||valor9.length==0 ) {
      alert("Todos los campos son requeridos") 
        
    }
     else{
      document.editarCliente.submit();
    }
   }
   function editarRegistroCliente(){
    var valor1=document.formulario.validacion1.value;
    if (valor1.length==0) {
      alert("Todos los campos son requeridos")
    }
    else{
      document.formulario.submit();
    }
   }
   function consultarCliente(){
    var valor=document.formulario.validacion1.value;
    if (valor.length==0) {
      alert("Debe escribir algo")
    }
    else{
      document.formulario.submit();
    }
   }
   function eliminarCliente(){
    var borrar=document.eliminar.elimina.value;
        if (borrar.length==0) {
      alert("Debe escribir algo");
    }
     else{
      document.eliminar.submit();
    }
   }
   function registrarReservacion(){
    var valor1=document.RegistroR.validacion1.value;
      var valor2=document.RegistroR.validacion2.value;
      if (valor1.length==0 || valor2.length==0 ) {
        alert('Todos los campos son requeridos')
      }
       else{
      document.RegistroR.submit();
    }
   }
   function editarReservacion(){
     var valor1=document.formulario.validacion1.value;
    if (valor1.length==0) {
      alert("Debe escribir algo")
    }
    else{
      document.formulario.submit();
    }
   }
   function editarNumeroReservacion(){
 var valor1=document.EditarNumReserva.validacion1.value;
      var valor2=document.EditarNumReserva.validacion2.value;
      if (valor1.length==0 || valor2.length==0 ) {
        alert('Todos los campos son requeridos')
      }
      else{
      document.EditarNumReserva.submit();
    }
   }
   function consultarReservacion(){
    var valor=document.formulario.validacion1.value;
    if (valor.length==0) {
        alert('Todos los campos son requeridos')
    }
    else{
      document.formulario.submit();
    }
   }
   function registroReservacion(){
    var valor=document.formulario.validacion1.value;
    if (valor.length==0) {
        alert('Debe escribir algo')
    }
    else{
      document.formulario.submit();
    }
   }
   function eliminarReservacion(){
      var valor=document.formulario.validacion1.value;
    if (valor.length==0) {
        alert('Todos los campos son requeridos')
    }
    else{
      document.formulario.submit();
    }
    
   }
   function registrarHabitacion(){
    var valor1=document.formulario.validacion1.value;
    var valor2=document.formulario.validacion2.value;
    var valor3=document.formulario.validacion3.value;
    if (valor1.length==0 || valor2.length==0 || valor3.length==0) {
        alert('Todos los campos son requeridos')
      }
       else{
      document.formulario.submit();
    }
   }
   function editarHabitacion(){
     var valor=document.formulario.validacion1.value;
    if (valor.length==0) {
        alert('Debe escribir algo')
    }
    else{
      document.formulario.submit();
    }
    
   }
   function consultarHabitacion(){
    var valor=document.formulario.validacion1.value;
     if (valor.length==0) {
        alert('Debe escribir un numero')
    }
    else{
      document.formulario.submit();
    }
   }
   function prepararInformacion(){
    var valor1=document.formulario.folio.value;
     var valor2=document.formulario.cliente.value;
      var valor3=document.formulario.fecha.value;
       var valor4=document.formulario.rfc.value;
        var valor5=document.formulario.idCliente.value;
         var valor6=document.formulario.lugar.value;
         if (valor1.length==0 || valor2.length==0 || valor3.length==0 || valor4.length==0 || valor5.length==0 || valor6.length==0) {
        alert('Debe completar todos los campos para guardar los datos')
      }
       else{
      document.formulario.submit();
    }
   }
   function consultar_factura(){
var valor=document.formulario.validacion1.value;
     if (valor.length==0) {
        alert('Debe escribir un numero')
    }
    else{
      document.formulario.submit();
    }
   }