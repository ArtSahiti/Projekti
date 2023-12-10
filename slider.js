
var i = 0;
var imgArr = [
    "photo/a20.webp",
    "photo/a21.webp",
    "photo/a22.webp",
    "photo/a24.webp",
    "photo/a25.webp"


];
function next() {
document.getElementById('slideshow').src = imgArr[i];
if (i < imgArr.length - 1) {
i++;
} else {
i = 0;
}

}
document.body.addEventListener('load', next());