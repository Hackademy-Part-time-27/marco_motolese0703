<?php
//esercizio1
// class Continent
// {
//   public $nameContinent;
//   public function __construct($continent){
//     $this->nameContinent = $continent;
//   }
// }


// class Country extends Continent{
//     public $nameCountry;
//     public function __construct($continent,$nameCountry){
//         parent::__construct($continent);
//         $this->nameCountry = $nameCountry;
//       }
// }


// class Region extends Country{
//     public $nameRegion;
//     public function __construct($continent,$nameCountry,$nameRegion){
//         parent::__construct($continent,$nameCountry);
//         $this->nameRegion = $nameRegion;
//       }
    
// }


// class Province extends Region{
//     public $nameProvince;
//     public function __construct($continent,$nameCountry,$nameRegion,$nameProvince){
//         parent::__construct($continent,$nameCountry,$nameRegion);
//         $this->nameProvince = $nameProvince;
//       }
    
// }




// Class Street extends Province{
// public $nameStreet;
// public function __construct($continent,$nameCountry,$nameRegion,$nameProvince,$nameStreet){
//     parent::__construct($continent,$nameCountry,$nameRegion,$nameProvince);
//     $this->nameStreet = $nameStreet;
//   }

//   public function getMyCurrentLocation()
//   {
//       echo "Mi trovo in: " . $this->nameContinent . " , " . $this->nameCountry . ", " . $this->nameRegion . ", " . $this->nameProvince . " ," . $this->nameStreet;
//   }
// }

// $myLocation = new Street("Europa", "Italia", "Calabria", "CS", "Via margherita");
// $myLocation->getMyCurrentLocation();






//  -->



//esercizio2

class Vertebrate{
    protected function  PrintVertebrate(){
        echo "sono una animale vertebrato \n";
    
    }
    
    public function __construct(){
        
    }
}
    

    class WarmBlooded extends Vertebrate{
        protected function  PrintBlood(){
            echo "sono una animale a sangue caldo \n";
        
        }
        
        public function __construct(){
            }
    }

        
    class Mammal extends WarmBlooded{
            protected function  PrintMammals(){
                echo "sono un mammifero \n";
            
            }
            
            public function presentati(){
                $this->PrintVertebrate();
                $this->PrintBlood();
                $this->PrintMammals();
            }
        }

            

            class Bird extends WarmBlooded{
               protected function  PrintBird(){
                echo "sono un uccello \n";
            }
            
            public function presentati(){
                $this->PrintVertebrate();
                $this->WarmBlooded();
                $this->PrintBird();
            }
        }

            class ColdBlooded extends Vertebrate{
            protected function  PrintColdBlooded(){
                echo "sono un animale a sangue freddo \n";
            
            }
            
            public function __construct(){
                }
             }


            class Fish extends ColdBlooded   {
            protected function  PrintFish(){
                echo "sono un pesce \n";
            
            }
            
            public function presentati(){
                
                $this->PrintVertebrate();
                $this->PrintColdBlooded();
                $this->PrintFish();
            }
        }


            class Reptile extends ColdBlooded {
            protected function  PrintReptile(){
                echo "sono un rettile \n";
            
            }
            
            public function presentati(){
                $this->PrintVertebrate();
                $this->PrintColdBlooded();
                $this->PrintReptile();
            }
            }

            $magikarp = new Fish();
            $magikarp->presentati();