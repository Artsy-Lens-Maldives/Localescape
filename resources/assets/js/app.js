require('./bootstrap');
window.onload = function () {
    var images = ["./images/Background/Bg1.jpg",
        "./images/Background/Bg2.jpg",
        "./images/Background/Bg3.jpg",
        "./images/Background/Bg4.jpg"
    ];
    var imageHead = document.getElementById("banner-background");
    var i = 0;

    function changeImage() {   
        imageHead.style.background = 'linear-gradient(-225deg, rgba(0,101,168,0.6) 0%, rgba(0,36,61,0.6) 50%), url("' + images[i] + '")';
        i = i + 1;
        if (i == images.length) {
            i =  0;
        }
        console.log('changed')
    }
    changeImage();
    window.setInterval(changeImage, 5000);
}