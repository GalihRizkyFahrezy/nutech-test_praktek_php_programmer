document.getElementById("fotodiv").style.display = "none";

document.getElementById('formupload').addEventListener('submit', function(event) {
    var fotobarang = document.getElementById('fotobarang');
    var foto = fotobarang.files[0];
    
    var fotosize = foto.size;
    var maxsize = 100 * 1024;
    
    if (fotosize > maxsize)
    {
        document.getElementById("fotodiv").style.display = "block";
        document.getElementById("fotoalert").innerHTML = "Foto tidak boleh lebih dari 100kb";
        event.preventDefault();
    }
});