<?php
class mobil {
  // Properties
  public $name;
  public $color;
  public $merk;
  public $automatic;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function set_merk($merk) {
    $this->merk = $merk;
  }
  function set_automatic($automatic) {
    $this->automatic = $automatic;
  }

  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
  function get_merk() {
    return $this->merk;
  }
  function get_automatic() {
    return $this->automatic;
  }
}

$Messi = new mobil();
$Ronaldo = new mobil();
$Messi->set_name('Messi');
$Messi->set_color('Hijau');
$Messi->set_merk('PSG');
$Messi->set_automatic('Ya');
$Ronaldo->set_name('Ronaldo');
$Ronaldo->set_color('PINK');
$Ronaldo->set_merk('Juventus');
$Ronaldo->set_automatic('Ngga');

echo ($Messi)->get_name()."</br>";
echo $Messi->get_color()."</br>";
echo $Messi->get_merk()."</br>";
echo $Messi->get_automatic()."</br>";
echo "<br>";
echo $Ronaldo->get_name()."</br>";
echo $Ronaldo->get_color()."</br>";
echo $Ronaldo->get_merk()."</br>";
echo $Ronaldo->get_automatic()."</br>";

?>