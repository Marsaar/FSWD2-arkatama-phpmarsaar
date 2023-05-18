<?php
    class animal{
        public $nama;
        public $jenis;

        public function __construct($nama, $jenis)
        {
            $this->nama = $nama;
            $this->jenis = $jenis;

        }

        public function getInfo(){
            return "Hewan ini adalah " . $this->nama . " dan termasuk dalam jenis " . $this->jenis . ". ";
        }
    }
    
    class cat extends animal{ 
        
        public function __construct($nama)
        {
            $jenis = "kucing";
            $this->nama = $nama;
            $this->jenis = $jenis;
        }

        public function getInfo()
        {
            return parent::getInfo() . "Kucing malas ini suka menghabiskan Lasagna-mu setiap kali kamu membelinya."; 
        }
    }

    class dog extends animal{ 
        
        public function __construct($nama)
        {
            $jenis = "anjing";
            $this->nama = $nama;
            $this->jenis = $jenis;
        }

        public function getInfo()
        {
            return parent::getInfo() . "Anjing ini loyal, energik dan menyenangkan, tidak seperti sebelumnya.";
        }
    }

    //Objek dari class animal
    $hewan = new animal("Singa","karnivora");
    echo $hewan->getInfo() . "<br>";

    //Objek dari class cat
    $cat = new cat("Garfield");
    echo $cat->getInfo() . "<br>";

    //Objek dari class dog
    $dog = new dog("Odie");
    echo $dog->getInfo() . "<br>";
?>