<?php 

Abstract class Sekil{
   
    Abstract public function Alan(array $degerAlan);
    Abstract public function Cevre(array $degerCevre);

}

class Dikdortgen extends Sekil{
    public function Alan($degerAlan){
        return '<br> Dikdörgenin Alanı '.$degerAlan[0]*$degerAlan[1];
        
    }
    public function Cevre($degerCevre){
        return '<br> Dikdörtgenin Çevresi '.($degerCevre[0]+$degerCevre[1])*2;
        
    }
    
}

class Ucgen extends Sekil{
    public function Alan($degerAlan){
        return '<br> Üçgenin Alanı '.($degerAlan[0]*$degerAlan[1])/2;
        
    }
    public function Cevre($degerCevre){
        return '<br> Üçgenin Çevresi '.($degerCevre[0]+$degerCevre[1]+$degerCevre[2]);
        
    }
    
}

class Kare extends Sekil{

    public function Alan($degerAlan){
        return '<br> Karenin Alanı '.($degerAlan[0]*$degerAlan[0]);
        
    }

    public function Cevre($degerCevre){
        return '<br> Karenin Çevresi '.(4*$degerCevre[0]);
        
    }
    
}
$dikdortgen=new Dikdortgen(); 
$ucgen =new Ucgen();
$kare =new Kare();

echo $dikdortgen->Alan([7,3]);
echo $dikdortgen->Cevre([7,3]);
echo $ucgen->Alan([7,3]);
echo $ucgen->Cevre([7,3,4]);
echo $kare->Alan([20]);
echo $kare->Cevre([20]);




?>