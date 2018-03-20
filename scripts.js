// wait until DOM is ready
document.addEventListener("DOMContentLoaded", function(event) {

  function ground() {

    var tl = new TimelineMax({
      repeat: -1
    });

    tl.to("#ground", 20, {
        backgroundPosition: "1301px 0px",
        force3D:true,
        rotation:0.01,
        z:0.01,
        autoRound:false,
        ease: Linear.easeNone
      });

    return tl;
  }

  function clouds() {

    var tl = new TimelineMax({
      repeat: -1
    });

    tl.to("#clouds", 52, {
      backgroundPosition: "-2247px bottom",
      force3D:true,
      rotation:0.01,
      z:0.01,
      //autoRound:false,
      ease: Linear.easeNone
    });

    return tl;
  }

  var masterTL = new TimelineMax({
    repeat: -1
  });

  // window load event makes sure image is
// loaded before running animation
window.onload = function() {

  masterTL
  .add(ground(),0)
  .add(clouds(),0)
  .timeScale(0.7)
  .progress(1).progress(0)
  .play();

};

});

$(function () {
  $('#login').hide();
    var string = " Welcome!";
    var q = jQuery.map(string.split(''), function (letter) {
        return $('<span>' + letter + '</span>');
    });

    var dest = $('#fadeIn');

    var c = 0;
    var i = setInterval(function () {
        q[c].appendTo(dest).hide().fadeIn(1000);
        c += 1;
        if (c >= q.length) clearInterval(i);
    }, 500);

    $('#login').fadeIn(8000);
});
