
    <?php
function ConnexionBase() {

try 
{
    $connexion = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'N@thandu972');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $connexion;

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage() . "<br>";
    echo "N° : " . $e->getCode();
    die("<br>"."Fin du script");
}
}
