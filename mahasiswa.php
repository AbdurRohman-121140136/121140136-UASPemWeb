<?php
// Definisikan kelas mahasiswa dengan properti-properti privatenya
class Mahasiswa {
    private $nim;             
    private $nama;            
    private $programStudi;    
    private $email;          
    private $tanggalLahir;    

    // Konstruktor untuk inisialisasi objek Mahasiswa dengan data awal
    public function __construct($nim, $nama, $programStudi, $email, $tanggalLahir)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->programStudi = $programStudi;
        $this->email = $email;
        $this->tanggalLahir = $tanggalLahir;
    }

    // Metode untuk mengambil nilai NIM
    public function getNim(){
        return $this->nim;
    }

    // Metode untuk mengambil nilai nama
    public function getNama(){
        return $this->nama;
    }

    // Metode untuk mengambil nilai program studi
    public function getProgramStudi(){
        return $this->programStudi;
    }

    // Metode untuk mengambil nilai email
    public function getEmail(){
        return $this->email;
    }

    // Metode untuk mengambil nilai tanggal lahir
    public function getTanggalLahir(){
        return $this->tanggalLahir;
    }
}
?>
