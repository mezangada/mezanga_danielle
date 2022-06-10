<?php


// Class personnage
class Personnage{

    private static $max_life = 120;

    protected $life = 80;
    protected $fight = 20;
    protected $nom;

    // Constructor
    public function __construct($nom, $life){
        $this->nom = $nom;
        $this->life = $life;
    }
    // Regeneration
    public function regenerate($life = null){
        if (is_null($life)) {
            $this->life = self::$max_life;
        }else {
            $this->life = $vie;
        }
    }
    // Mourrir
    public function dead(){
        return $this->life <= 0;
    }
    // Not null value
    public function not_negative(){
        if ($this->life < 0) {
            $this->life = 0;
        }
    }
    // Attaque
    public function attaque($target){
        $target->life -= $fight;
        $target->not_negative();
    }
}

//Class Guerrier
class Guerrier extends Personnage{
    public $arme;
    public $bouclier;
    public $life = 150;
    public $fight = 0;
    public function __construct($arme = null, $bouclier = null){
        $this->arme = $arme;
        $this->bouclier = $bouclier;
    }
    public function attack($target){
        if ($this->arme == "hache") {
            $target->life -= 20;
        } else if ($this->arme == "epee") {
            $target->life -= 15;
        }else {
            $target->life -= 10;
        }
        $target->not_negative(); 
    }
    public function parer($target){
        if ($this->arme == "lance") {
            
        } else {
            
        }
        $target->not_negative(); 
    }
}

//Class Sorcier
class Sorcier extends Personnage{
    public $life = 100;
    public $fight = 5;
    public function attack($target){
        $target->life -= $this->fight;
        $target->not_negative(); 
    }
    public function boule_de_feu($target){
        $target->life -= 30;
        $target->not_negative(); 
    }

}

//Class Archer
class Archer extends Personnage{
    public $life = 120;
    public $fight = 15;
    public function attack($target){
        $target->life -= 2 * $this->fight;
        $target->not_negative(); 
    }
}

//Class Pretre
class Pretre extends Personnage{
    public $life = 85;
    public $fight = 1;
    public function attack($target){
        $target->life -= $this->fight;
        $target->not_negative(); 
    }
    public function pouvoir_sacre($target){
        $target->life -= 10;
        $target->not_negative(); 
        $this->life += 5;
    }

}

//Class Druide
class Druide extends Personnage{
    public $life = 85;
    public $fight = 1;
    public function attack($target){
        $target->life -= $this->fight;
        $target->not_negative(); 
    }
    public function pouvoir_naturel($target){
        $x = rand(5,15);
        $target->life -= $x;
        $target->not_negative(); 
        $this->life += x;
    }

}