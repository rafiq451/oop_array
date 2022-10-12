<?php 
class Animal {
    public $animal;
     

    public function __construct($data = ["Ayam","Ikan"])
    {
      $this->animal = $data;
    }

    public function index() {
      // $bab = ["anjing", "babi"];
      foreach($this->animal as $a) {
        echo "- " . $a . "</br>";
      } 
    }
    public function store($data) {
      array_push($this->animal, $data);
    }

    public function update($index, $data) {
      $this->animal[$index] = $data;   
    }
    public function destroy($index) {
      unset($this->animal[$index]);
    }
  }

  $animals = new Animal();

  echo "Index - Menampilkan seluruh hewan </br>";
  echo $animals->index();
  echo "</br>";

  echo "store - Menambahkan hewan baru (Burung) </br>";
  echo $animals->store("Burung");
  echo $animals->index();
  echo "</br>";  
  
  echo "update - Mengupdate hewan </br>";
  echo $animals->update(0,"Kucing Anggora");
  echo $animals->index();
  echo "</br>";  

  echo "destroy - Menghapus hewan </br>";
  echo $animals->destroy(1);
  echo $animals->index();
























































