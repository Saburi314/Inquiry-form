// 画像を選択した時点で、サイトで表示する処理
function setImage(target) {
    var reader = new FileReader();
    var preview = document.getElementById("preview");
    reader.onload = function (e) {
        preview.setAttribute('src', e.target.result);
        preview.style.display = "block";
    }
    reader.readAsDataURL(target.files[0]);
};

