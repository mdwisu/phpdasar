// ambil emement yang di butuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('tabel');
// addEventListener, removeEventListener (click, mouseover, mouseout) (resize) (keypress, keyup)
// document.getElementById('test').addEventListener("", function);
// document.getElementById('test').removeEventListener("",function);

// tambahkan event ketika keyword ditulis
keyword.addEventListener('keyup', function () {
    
    // buat object ajax
    var xhr = new XMLHttpRequest();

    // cek kesiapan ajax
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }

    // eksekusi ajax
    xhr.open('GET', 'ajax/mahasiswa.php?keyword='+keyword.value, true);
    xhr.send();








    
});