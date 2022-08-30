$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();

var opp3 = document.getElementById('opp3')
opp3.value = "Text <VALUE FROM OPP4> More Text";
var opp4 = document.getElementById('opp4')
opp4.value = "Field Text Here";

opp4.addEventListener('input', function () {
    opp3.value = this.value;
});