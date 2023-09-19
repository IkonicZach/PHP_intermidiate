<?

use IND as GlobalIND;

class IND{
    public const DB_HOST = "";
    public const DB_NAME = "test";
    public const DB_USER = "Zach";
    public const DB_PASS = "1123";
    public $con;

    public function __construct()
    {
        $this->con = new PDO("mysql:host=" . self::DB_HOST . "dbname=" . self::DB_NAME, self::DB_USER, self::DB_PASS);
        $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($this->con){
            echo "Connected";
        }else{
            echo "Disconnected.";
        }
    }
}
$obj = new IND();
?>