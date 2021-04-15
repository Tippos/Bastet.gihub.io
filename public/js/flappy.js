var canvas = document.getElementById('gamezone');
var context = canvas.getContext('2d');
var scoreshow = document.getElementById('score');

// Nạp hình
var catImg = new Image();
var hinhNenChinh = new Image();
var ongTren = new Image();
var ongDuoi = new Image();
catImg.src = "img/flappy/kitcat.png";
hinhNenChinh.src = "img/flappy/nenchinh.png";
ongTren.src = "img/flappy/ongtren.png";
ongDuoi.src = "img/flappy/ongduoi.png";

// tạo 1 số biến cần thiết
var score = 0;
var khoangCachHaiLong = 140;
var khoangCachDenOngDuoi; // từ vị trí ống trên đến óng dưới
var widthBackGround = 900;
var heighBackGround = 500;
// tạo 1 object với tọa độ x y

var cat = {
    x: widthBackGround / 5,
    y: heighBackGround / 2
}
var ong = []; // tạo mảng để chứ các ống di chuyển
ong[0] = {
    x: canvas.width,
    y: 0 // ống đầu tiên nằm bên phải ngoài cùng

}

// tạo function chạy game
function run() {
    // load anh vao
    context.drawImage(hinhNenChinh, 0, 0);
    context.drawImage(catImg, cat.x, cat.y);

    for (var i = 0; i < ong.length; i++) {
        khoangCachDenOngDuoi = ongTren.height + khoangCachHaiLong;
        context.drawImage(ongTren, ong[i].x, ong[i].y);
        // vẽ ống trên theo tọa độ của ống đó
        // ống dưới phụ thuộc ống trên
        context.drawImage(ongDuoi, ong[i].x, ong[i].y + khoangCachDenOngDuoi);
        //de ong di chuyen
        ong[i].x -= 2;

        //lap trinh them ong khi ong di chuyen den giua
        // no se tao them 1 ong nua
        if (ong[i].x == canvas.width / 2) {
            ong.push({
                x: canvas.width,
                y: Math.floor(Math.random() * ongTren.height) - ongTren.height
            })
        }
        if (ong[i].x == 0) ong.splice(0, 1);
        if (ong[i].x == cat.x) score++;

        //khi cham vao ong se thua
        if (cat.y + catImg.height == canvas.height ||
            cat.x + catImg.width >= ong[i].x && cat.x <= ong[i].x + ongTren.width
            && (cat.y <= ong[i].y + ongTren.height ||
                cat.y + catImg.height >= ong[i].y + khoangCachDenOngDuoi)
        ) {
            return confirm('Nhấn F5 để chơi lại');

        }


    }

    scoreshow.innerHTML = "Score: " + score + " 🐟";
    // cho cat roi xuong
    cat.y += 2;
    requestAnimationFrame(run);
}

//them function cho no bay len khi an
document.addEventListener("keydown", function () {
    cat.y -= 70;
})
//
run();
