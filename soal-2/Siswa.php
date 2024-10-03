<?php

class Siswa
{
    // deklarasikan atribut-atribut kelas Siswa
    private $nama ;
    private $nisn ;
    private $alamat ;
    private $jurusan ;
    private $tanggal_Lahir;
    

    
    // definisikan metode konstruktor, setter ,dan getter
    public function __construct($nama, $nisn, $alamat, $jurusan, $tanggalLahir) {
        $this->nama = $nama;
        $this->nisn = $nisn;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
        $this->tanggal_Lahir = $tanggalLahir; // Format tanggal: YYYY-MM-DD
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function setNisn($nisn) {
        $this->nisn = $nisn;
    }

    public function setAlamat($alamat) {
        $this->alamat = $alamat;
    }

    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    public function setTanggalLahir($tanggal_Lahir) {
        $this->tanggal_Lahir = $tanggal_Lahir;
    }

    // Getter untuk mendapatkan nilai atribut
    public function getNama() {
        return $this->nama;
        echo $this -> nama;
    }

    public function getNisn() {
        return $this->nisn;
        echo $this -> nisn;
    }

    public function getAlamat() {
        return $this->alamat;
        echo $this -> alamat;
    }

    public function getJurusan() {
        return $this->jurusan;
        echo $this -> jurusan;
    }

    public function getTanggalLahir() {
        return $this->tanggal_Lahir;
        echo $this -> tanggal_Lahir;
    }


    // buat metode untuk menghitung umur siswa

    public function hitungUmur() {
        $tanggal_Lahir = new DateTime($this -> tanggal_Lahir);
        $tanggalSekarang = new DateTime(); //tanggal saat ini
        $umur = $tanggal_Lahir -> diff($tanggalSekarang);
        return $umur->y; //mengembalikan umur dalam tahun 
        
    }
}

// buat dua buah objek siswa
$siswa_1 = new Siswa("Bambang", "1234", "Loa Bakung", "PPLG", "27-11-2006");
$siswa_2 = new Siswa("Bahrun", "1235", "Air Putih", "PPLG", "13-01-2006");

echo "nama siswa 1 = " . $siswa_1 -> getNama();
echo "<br>";
echo "Nisn siswa 1 = " . $siswa_1 -> getNisn();
echo "<br>";
echo "alamat tempat siswa 1 = " . $siswa_1 -> getAlamat();
echo "<br>";
echo "Jurusan yg dipilih siswa 1 = " . $siswa_1 -> getJurusan();
echo "<br>";
echo "tanggal lahir siswa 1 = " . $siswa_1 -> getTanggalLahir();
echo "<br>";
echo "nama siswa 2 = " . $siswa_2-> getNama();
echo "<br>";
echo "Nisn siswa 2 = " . $siswa_2 -> getNisn();
echo "<br>";
echo "alamat? tempat siswa 2 = " . $siswa_2 -> getAlamat();
echo "<br>";
echo "Jurusan yg dipilih siswa 2 = " . $siswa_1 -> getJurusan();
echo "<br>";
echo "tanggal lahir siswa 2 = " . $siswa_1 -> getTanggalLahir();
echo "<br>";




$umursiswa1 = $siswa_1->hitungUmur();
$umursiswa2 = $siswa_2->hitungUmur();
echo "<br>";
echo "<br>";
echo "siswa 1 berumur = " . $umursiswa1;  
echo "<br>";
echo "siswa 2 berumur = " . $umursiswa2;
echo "<br>";
echo "<br>";
if ($umursiswa1 > $umursiswa2){
    echo "siswa atas nama : " . $siswa_1 -> getNama() . " <br> lebih tua dari siswa beratas namakan : " . $siswa_2 -> getNama();
} elseif ($umursiswa1 < $umursiswa2){
    echo "siswa atas nama : " . $siswa_1 -> getNama() . "<br> lebih muda dari siswa beratas namakan : " . $siswa_2 -> getNama();
} else {
    echo "siswa : " . $siswa_1 -> getNama() . " dan siswa : " . $siswa_2 -> getNama() . "<br> memiliki umur yg sama";
}





// contoh output:
// Bambang lebih tua dibandingkan Bahrun.