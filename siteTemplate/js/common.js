window.isMobile = false;
var filter = "win16|win32|win64|mac";
if (navigator.platform) {
  isMobile = filter.indexOf(navigator.platform.toLowerCase()) < 0;
}

window.isAndroid = false;
if( /Android/i.test(navigator.userAgent)) {
  isAndroid = true
}

window.isIOS = false;
if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
  isIOS = true
}



$(function () {
  var reqID
  function fnGetWinInfo() {
    window.scrT = $(window).scrollTop()
    window.scrL = $(window).scrollLeft()
    window.winW = $(window).width()
    window.winH = $(window).height()

  }

  fnGetWinInfo()

  $(window).scroll(function () {
    reqID = requestAnimationFrame(fnGetWinInfo)
  }).resize(function () {
    reqID = requestAnimationFrame(fnGetWinInfo)
  })
})