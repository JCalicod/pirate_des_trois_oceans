$("#cartographie-background").click(function(e) {
  var parentOffset = $(this).parent().offset();
  var relX = e.pageX - parentOffset.left;
  var relY = e.pageY - parentOffset.top;

  console.log('x : ' + relX + ' y : ' + relY);
});
