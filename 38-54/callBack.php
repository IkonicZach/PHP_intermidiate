<?
class Indie
{
    public function din($finish)
    {
        $i = 0;
        $sum = 0;
        while($i < 1000){
            $sum += $i;
            $i++;
        }
        $this->$finish($sum);
    }

    public function finish($total)
    {
        echo "Total is {$total}";
    }

    public function heyho()
    {
        echo "HeyHo!!!!!!!!!";
    }
}

$ind = new Indie();
$ind->din("finish");
