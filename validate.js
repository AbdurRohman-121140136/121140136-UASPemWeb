function validateForm() {
    // Validasi Nama
    var name = document.getElementById("name").value;
    if (name === "") {
        alert("Nama tidak boleh kosong");
        return false;
    }

    // Validasi Program Studi
    var programStudi = document.getElementById("program_studi").value;
    if (programStudi === "") {
        alert("Program Studi tidak boleh kosong");
        return false;
    }

    // Validasi Email
    var email = document.getElementById("email").value;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email === "" || !emailRegex.test(email)) {
        alert("Email tidak valid");
        return false;
    }

    // Validasi Tanggal Lahir
    var tanggalLahir = document.getElementById("tanggal_lahir").value;
    if (tanggalLahir === "") {
        alert("Tanggal Lahir tidak boleh kosong");
        return false;
    }

    return true;
}