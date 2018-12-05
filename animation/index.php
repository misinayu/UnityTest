<html>
<head>
<style>
body {
    background-color: #f4f8ff;
}

.screen {
    background-color: white;
    height: 200px;
    width: 1000px;
}

#mario {
    position:absolute;
    left:300px;
    top:200px;
}
</style>

<script type="text/javascript">
document.onkeydown = KeyCode;
x= 300; // TODO::初期位置を枠の中に収める
y= 200;

var img = new Array();
img.right = new Image();
img.right.src = "images/mario_1.png";
imt.rightMove01 = new Image();
img.rightMove01.src = "images/mario_2.png";
img.rightMove02 = new Image();
img.rightMove02.src = "images/mario_3.png";
img.left = new Image();
img.left.src = "images/mario_4.png";
img.leftMove01 = new Image();
img.leftMove01.src = "images/mario_5.png";
img.leftMove02 = new Image();
img.leftMove02.src = "images/mario_6.png";

function KeyCode()
{
    if(document.all)    kcode = event.keyCode;
    else if(document.getElementById)
    kcode = (event.keyCode)? event.keyCode: event.charCode;
    else if(document.layers)    kcode = event.which;
    switch (kcode) {
    case 0x25:
        // 左矢印キー
        if (x>1)  x-= 20;
        moveRight(); // TODO::右に動かす
        break;
    // case 0x26:
        // 上矢印キー
    //    if (y>1)  y-= 20;
    //    break;
    case 0x27:
        // 右矢印キー
        if (x < 1000) x+= 20;
        moveLeft(); // TODO::右に動かす
        break;
    // case 0x28:
        // 下矢印キー
    //     y+= 20;
    //     break;
    }
}

function moveImage()
{
    document.mario.style.left= x;
    document.mario.style.top= y;
}
</script>

</head>
<body onLoad="setInterval('moveImage()',25)">

<h2>アニメーションとイベント駆動処理</h2>
<div class="screen">
    <img id="mario" src="images/mario_1.png" name="mario">
</div>
</body>
</html>
