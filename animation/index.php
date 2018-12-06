<html>
<head>
<style>
body {
    background-color: #f4f8ff;
    margin: 10px;
}

.screen {
    background-color: white;
    height: 200px;
    width: 1000px;
}

#mario {
    position:absolute;
    left:300px;
    top:185px;
}
</style>

<script type="text/javascript">
document.onkeydown = KeyCode;
x= 300;
y= 185;

var img = new Array();
img.right01 = new Image();
img.right01.src = "images/mario_1.png";
img.right02 = new Image();
img.right02.src = "images/mario_2.png";
img.right03 = new Image();
img.right03.src = "images/mario_3.png";
img.left01 = new Image();
img.left01.src = "images/mario_4.png";
img.left02 = new Image();
img.left02.src = "images/mario_5.png";
img.left03 = new Image();
img.left03.src = "images/mario_6.png";

function KeyCode()
{
    if(document.all)    kcode = event.keyCode;
    else if(document.getElementById)
    kcode = (event.keyCode)? event.keyCode: event.charCode;
    else if(document.layers)    kcode = event.which;
    switch (kcode) {
    case 0x25:
        // 左矢印キー
        moveLeft();
        break;
    case 0x27:
        // 右矢印キー
        moveRight();
        break;
    }
}

// 右向きの画像切替
function moveRight(){
    //var screen = document.getElementById("screen");
    var mario = document.getElementById("mario");

    if (x > (1000 - mario.width)) {
    //if (x > (screen.left + screen.width)) {
        return;
    }

    x+= 10;

    if (mario.src == img.right01.src) {
        mario.src = img.right02.src;
    } else if (mario.src == img.right02.src) {
        mario.src = img.right03.src;
    } else if (mario.src == img.right03.src) {
        mario.src = img.right01.src;
    } else {
        mario.src = img.right01.src;
    }
}

// 左向きの画像切替
function moveLeft(){
    //var screen = document.getElementById("screen");
    var mario = document.getElementById("mario");

    if (x < 20) {
        return;
    }

    x-= 10;
    if (mario.src == img.left01.src) {
        mario.src = img.left02.src;
    } else if (mario.src == img.left02.src) {
        mario.src = img.left03.src;
    } else if (mario.src == img.left03.src) {
        mario.src = img.left01.src;
    } else {
        mario.src = img.left01.src;
    }
}

// 画像の位置を動かす
function moveImage()
{
    document.mario.style.left= x;
    document.mario.style.top= y;
}
</script>

</head>
<body onLoad="setInterval('moveImage()',25)">

<h2>アニメーションとイベント駆動処理</h2>
<div id="screen" class="screen">
    <img id="mario" src="images/mario_1.png" name="mario">
</div>
</body>
</html>
