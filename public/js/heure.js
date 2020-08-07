function hour() {


  var dt = new Date();
  var month;
  switch(dt.getUTCMonth()) {
    case 0:
      month = 'Janvier';
    break;
    case 1:
      month = 'Février';
    break;
    case 2:
      month = 'Mars';
    break;
    case 3:
      month = 'Avril';
    break;
    case 4:
      month = 'Mai';
    break;
    case 5:
      month = 'Juin';
    break;
    case 6:
      month = 'Juillet';
    break;
    case 7:
      month = 'Août';
    break;
    case 8:
      month = 'Septembre';
    break;
    case 9:
      month = 'Octobre';
    break;
    case 10:
      month = 'Novembre';
    break;
    case 11:
      month = 'Décembre';
    break;
    default:
      month = 'Etrange';
  }
  var time = '<b>' +
  (dt.getHours() < 10 ? ('0' + dt.getHours())  : dt.getHours()) + ":" +
  (dt.getMinutes() < 10 ? ('0' + dt.getMinutes()) : dt.getMinutes()) + ":" +
  (dt.getSeconds() < 10 ? ('0' + dt.getSeconds()) : dt.getSeconds()) + '</b> - ' + dt.getUTCDate() + ' ' + month + ' ' + (dt.getUTCFullYear() - 315);
  $('#heure').html(time);
  setTimeout(hour, '1000');
}

hour();
