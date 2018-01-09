$(document).ready(function() {
  var bodyHeight = $("body").height();
  var vwptHeight = $(window).height();
  if (vwptHeight > bodyHeight) {
    $("#footer").css("position","absolute").css("bottom",0);
  }



  //parte do hover da vitrine
  $("#card_id").hover(function(){
    alert("testando");
  });
});
