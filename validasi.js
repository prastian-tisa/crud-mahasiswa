function validasiForm() {

    let nim = document.forms["formMahasiswa"]["nim"].value;
    let nama = document.forms["formMahasiswa"]["nama"].value;
    let jurusan = document.forms["formMahasiswa"]["jurusan"].value;
    let foto = document.forms["formMahasiswa"]["foto"].files[0];

    if(nim == "" || nama == "" || jurusan == ""){
        alert("Semua field wajib diisi!");
        return false;
    }

    if(foto){
        let ekstensi = foto.name.split('.').pop().toLowerCase();

        if(ekstensi != "jpg" && ekstensi != "jpeg" && ekstensi != "png"){
            alert("File harus berupa gambar JPG, JPEG, atau PNG!");
            return false;
        }

        if(foto.size > 2 * 1024 * 1024){
            alert("Ukuran file maksimal 2 MB!");
            return false;
        }
    }

    return true;
}

function konfirmasiHapus(){
    return confirm("Yakin ingin menghapus data?");
}