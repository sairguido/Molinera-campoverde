// FUNCION PARA PERMITIR SOLO NÚMERO
function limpiarNumero(obj) {
    /* El evento "change" sólo saltará si son diferentes */
    obj.value = obj.value.replace(/\D/g, '');
  }