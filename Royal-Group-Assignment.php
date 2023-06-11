<?php


class Subject {
    public $name;

    public function teach() {
        echo $this->name . " is a part of the subjects provided by the school.";
    }
}

class MainSubject extends Subject {
    public function purpose() {
        echo $this->name . " is considered really important in this school.";
    } 

    public function teacher() {
        echo $this->name . " is taught by a proficient Professor.";
    }

    public function passmark() {
        echo $this->name . " has a distinction mark of Eighty.";
    }

    public function Branch() {
        echo $this->name . " has a branch subject called Poetry.";
        return new BranchSubject();
    }

    public function Difficulty() {
        echo $this->name . " has a different difficulty depending on learning year.";
    }
}

class BranchSubject {
    public $session;
    public $distictionmark;

    public function teach() {
        echo "Both the Professor and the Assistant Teacher are in charge of Poetry class.";
        return new MainSubject();
    }

    public function year() {
        echo "Poetry was introduced as a Branch Subject of English in 2019 by the school.";
    } 
}

$main = new MainSubject();
$main->name = "Advanced English";

$main->purpose();
echo "<br/>";
$main->teacher();
echo "<br/>";
$main->passmark();
echo "<br/>";
$main->Branch();
echo "<br/>";
$main->Difficulty();
echo "<br/>";
echo "<br/>";

$branch = $main->Branch();
$branch->session = "Ten";
$branch->distictionmark = "Sixty";

$branch->year();

$newsubject = $branch->teach();
$newsubject->name = "Poetry";


echo "<br/>";
$newsubject->purpose();
echo "<br/>";
$newsubject->Difficulty();


?>
