$(function(){
  var reqID
  function fnHeaderfuntion() {
    if(scrT >= 35) {
      $(`header`).addClass(`active`)
    } else {
      $(`header`).removeClass(`active`)
    }
  }

  $(window).scroll(function () {
    reqID = requestAnimationFrame(fnHeaderfuntion)
  }).resize(function () {
    reqID = requestAnimationFrame(fnHeaderfuntion)
  })

})