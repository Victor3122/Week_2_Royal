<?class User {
    private $name;
    private $dateOfBirth;
    private $address;
    private $idNumber;

    public function __construct($name, $dateOfBirth, $address, $idNumber) {
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
        $this->idNumber = $idNumber;
    }

    public function getDetails() {
        echo "Name: " . $this->name . "\n";
        echo "Date of Birth: " . $this->dateOfBirth . "\n";
        echo "Address: " . $this->address . "\n";
        echo "ID Number: " . $this->idNumber . "\n";
    }

    public function generateIDCard() {
        echo "<div class='id-card'>";
        echo "<h2>ID Card</h2>";
        echo "<p>Name: " . $this->name . "</p>";
        echo "<p>Date of Birth: " . $this->dateOfBirth . "</p>";
        echo "<p>Address: " . $this->address . "</p>";
        echo "<p>ID Number: " . $this->idNumber . "</p>";
        echo "</div>";
    }
}


$user = new User("Royal Victor Say", "31.07.2003", "Myanmar Yangon", "12/MAGATA(N)108792");


$user->getDetails();


$user->generateIDCard(); ?>
