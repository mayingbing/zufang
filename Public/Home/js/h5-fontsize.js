var Dpr = 1, uAgent = window.navigator.userAgent;
var isIOS = uAgent.match(/iphone/i);
function resizeRoot() {
    var a = (screen.width > 0) ? (window.innerWidth >= screen.width || window.innerWidth == 0) ? screen.width : window.innerWidth : window.innerWidth, c, d;
    var b = (screen.height > 0) ? (window.innerHeight >= screen.height || window.innerHeight == 0) ? screen.height : window.innerHeight : window.innerHeight;
    if (window.devicePixelRatio) {
        c = window.devicePixelRatio
    } else {
        c = isIOS ? a > 818 ? 3 : a > 480 ? 2 : 1 : 1
    }
    if (isIOS) {
        a = screen.width;
        b = screen.height
    }
    if (a > b) {
        a = b
    }
    d = a > 1080 ? 144 : a / 6.4;
    d = d > 32 ? d : 32;
    document.getElementsByTagName("html")[0].dataset.dpr = c;
    document.getElementsByTagName("html")[0].style.fontSize = d + "px"
}
resizeRoot();

//除以10的  单位加上 rem   50px  约等于  0.5rem