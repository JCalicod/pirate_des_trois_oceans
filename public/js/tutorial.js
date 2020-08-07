$("#tuto-hide").click(function(e) {
  $("#card-tuto").hide();
  $("#tuto-not-displayed").show();
});

$("#tuto-not-displayed").click(function(e) {
  $("#card-tuto").show();
  $("#tuto-not-displayed").hide();
});
