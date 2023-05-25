<?php 

    class Introduction{
        public $nama;
        private $jurusan;
        protected $sekolah;

        public function setNama($data){
            $this->nama = $data;
        }
        public function setJurusan($data){
            $this->jurusan = $data;
        }
        public function setSekolah($data){
            $this->sekolah = $data;
        }

        public function getNama(){
            return $this->nama;
        }
        public function getJurusan(){
            return $this->jurusan;
        }
        public function getSekolah(){
            return $this->sekolah;
        }
    }

    $profile = new Introduction;
    $profile->setNama("Mohammad Riyan Dzaki A");
    $profile->setJurusan("PPLG");
    $profile->setSekolah("SMK WIKRAMA BOGOR");

    echo "Perkenalkan, nama saya ". $profile->getNama();
    echo "<br>";
    echo "Saya sekolah di ". $profile->getSekolah();
    echo "<br>";
    echo "Jurusan saya adalah ". $profile->getJurusan();

?>