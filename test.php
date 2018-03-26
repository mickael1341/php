<h1> Des cookies, et encore des cookies tout pleins de cookies </h1>
<?php /*phpinfo();*/ ?>
<?php echo date('d/m/Y h:i:s'); ?> .</p>
<p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s');
echo('<br>'); 

class Personnage
{
    private $_force;
    private $_localisation;
    private $_experience;
    private $_degats;

    public function parler()
    {
        echo 'BONJOUR';
    }
    public function frapper($persoAFrapper)
    {
        $persoAFrapper->_degats += $this->_force;
    }
    public function gagnerExperiece()
    {
        $this->_experience = $this->_experience + 1;
    }

    public function degats()
    {
        return $this->_degats;
    }
    public function force()
    {
        return $this->_force;
    }
    public function experience()
    {
        return $this->_experience;
    }

    public function setForce($force)
    {
        $this->_force = $force;
    }
    public function setExperience($experience)
    {
        $this->_experience = $experience;
    }
}

$perso1 = new Personnage;
$perso2 = new Personnage;
$perso1->parler();

$perso1->setForce(10);
$perso1->setExperience(2);


$perso2->setForce(90);
$perso2->setExperience(58);


$perso1->frapper($perso2);
$perso1->gagnerExperiece();

$perso2->frapper($perso1);
$perso2->gagnerExperiece();

echo 'perso 1 a', $perso1->force(),'force alors que perso 2 en a ', $perso2->force(),'<br /> ';

echo 'perso 1 a', $perso1->experience(),'experience alors que perso 2 en a ', $perso2->experience(),'<br /> ';
echo 'perso 1 a', $perso1->degats(),'degats alors que perso 2 en a ', $perso2->degats(),'<br /> ';
?>.</p>
