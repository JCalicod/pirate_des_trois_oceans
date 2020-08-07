$('#choice').on('input', function() {
  if ($(this).val() == 0) {
    $('#seaman').html('');
    $('#explorer').html('');
    $('#gunner').html('');
    $('#cook').html('');
    $('#carpenter').html('');
    $('#surgeon').html('');
  }
  else {
    ship.forEach (function(element) {
      if ($('#choice').val() == element['id']) {
        var seaman = 'Déjà à bord <span class="blue-text font-weight-bold ml-2 mr-2">' + element['seaman'] + ' / ' + element['maxSeaman'];
        var explorer = 'Déjà à bord <span class="blue-text font-weight-bold ml-2 mr-2">' + element['explorer'] + ' / ' + element['maxExplorer'];
        var gunner = 'Déjà à bord <span class="blue-text font-weight-bold ml-2 mr-2">' + element['gunner'] + ' / ' + element['maxGunner'];
        var cook = 'Déjà à bord <span class="blue-text font-weight-bold ml-2 mr-2">' + element['cook'] + ' / ' + element['maxCook'];
        var carpenter = 'Déjà à bord <span class="blue-text font-weight-bold ml-2 mr-2">' + element['carpenter'] + ' / ' + element['maxCarpenter'];
        var surgeon = 'Déjà à bord <span class="blue-text font-weight-bold ml-2 mr-2">' + element['surgeon'] + ' / ' + element['maxSurgeon'];

        $('#seaman').prepend(seaman);
        $('#explorer').prepend(explorer);
        $('#gunner').prepend(gunner);
        $('#cook').prepend(cook);
        $('#carpenter').prepend(carpenter);
        $('#surgeon').prepend(surgeon);
      }
    });
  }

    //$('#avatar-img').attr('src', 'public/images/avatars/' + $(this).val() + '.jpg');
});
