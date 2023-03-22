$(function(){
  var reqID
  function fnGetWinInfo() {
    $(`.biz_intro_section > p, .biz_intro_section li`).each(function(){
      var offT = $(this).offset().top
      if(scrT >= offT - winH * 0.9) $(this).addClass(`active`)
      else $(this).removeClass(`active`)
    })

    $(`.biz_intro_section li div`).each(function(){
      var offT = $(this).offset().top
      var inH = $(this).innerHeight()
      var meta = 0 + (scrT - (offT - winH * 0.5 + inH * 0.5)) * 0.05
      if(meta > 15) meta = 15
      if(meta < -15) meta = -15
      $(this).children(`img`).css({'transform':`scale(150%) translateY(${meta}%)`})
    })
  }

  $(window).scroll(function () {
    reqID = requestAnimationFrame(fnGetWinInfo)
  }).resize(function () {
    reqID = requestAnimationFrame(fnGetWinInfo)
  })

})