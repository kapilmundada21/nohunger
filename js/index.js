// var timeOnSlide = 3,
//   timeBetweenSlides = 1,
//   animationstring = "animation",
//   animation = !1,
//   keyframeprefix = "",
//   domPrefixes = "Webkit Moz O Khtml".split(" "),
//   pfx = "",
//   slidy = document.getElementById("slidy");
// if (
//   (void 0 !== slidy.style.animationName && (animation = !0), animation === !1)
// )
//   for (var i = 0; i < domPrefixes.length; i++)
//     if (void 0 !== slidy.style[domPrefixes[i] + "AnimationName"]) {
//       (pfx = domPrefixes[i]),
//         (animationstring = pfx + "Animation"),
//         (keyframeprefix = "-" + pfx.toLowerCase() + "-"),
//         (animation = !0);
//       break;
//     }
// if (animation === !1);
// else {
//   var images = slidy.getElementsByTagName("img"),
//     firstImg = images[0],
//     imgWrap = firstImg.cloneNode(!1);
//   slidy.appendChild(imgWrap);
//   var imgCount = images.length,
//     totalTime = (timeOnSlide + timeBetweenSlides) * (imgCount - 1),
//     slideRatio = (timeOnSlide / totalTime) * 100,
//     moveRatio = (timeBetweenSlides / totalTime) * 100,
//     basePercentage = 100 / imgCount,
//     position = 0,
//     css = document.createElement("style");
//   for (
//     css.type = "text/css",
//       css.innerHTML +=
//         "#slidy { text-align: left; margin: 0; font-size: 0; position: relative; width: " +
//         100 * imgCount +
//         "%;  }\n",
//       css.innerHTML +=
//         "#slidy img { float: left; width: " + basePercentage + "%; }\n",
//       css.innerHTML += "@" + keyframeprefix + "keyframes slidy {\n",
//       i = 0;
//     imgCount - 1 > i;
//     i++
//   )
//     (position += slideRatio),
//       (css.innerHTML += position + "% { left: -" + 100 * i + "%; }\n"),
//       (position += moveRatio),
//       (css.innerHTML += position + "% { left: -" + 100 * (i + 1) + "%; }\n");
//   (css.innerHTML += "}\n"),
//     (css.innerHTML +=
//       "#slidy { left: 0%; " +
//       keyframeprefix +
//       "transform: translate3d(0,0,0); " +
//       keyframeprefix +
//       "animation: " +
//       totalTime +
//       "s slidy infinite; }\n"),
//     document.body.appendChild(css);
// }


var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}