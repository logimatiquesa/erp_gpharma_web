function explodeDate(param, date = "") {
    if (
      param != "null" ||
      param != null ||
      param != "" ||
      typeof param !== object
    ) {
      if (date != "") {
        var date = param.split(" ")[0].split("-");
        var heure = param.split(" ")[1];
        return date[2] + "/" + date[1] + "/" + date[0] + " " + heure;
      } else {
        var date = param.split(" ")[0].split("-");
        return date[2] + "/" + date[1] + "/" + date[0];
      }
    }
    return param;
  }

function separateurMilliers(nombre) {
      
  return nombre.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}
