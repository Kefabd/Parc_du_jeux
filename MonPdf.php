<?php
require_once('fpdf185/fpdf.php');

class MonPDF extends FPDF {
    private $nom;
    private $prenom;
    private $adresse;
    private $tel;
    private $dateNaissance;
    private $email;
    private $type;
    private $prix;
    private $adulte;
    private $enfant;
    private $date;

    // Constructeur de la classe MonPDF
    public function __construct($nom, $prenom, $adresse, $tel, $dateNaissance, $email,$type,$date,$prix,$adulte,$enfant) {
        parent::__construct();
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->adresse = $adresse;
        $this->tel = $tel;
        $this->dateNaissance = $dateNaissance;
        $this->email = $email;
        $this->type=$type;
        $this->prix=$prix;
        $this->adulte=$adulte;
        $this->enfant=$enfant;
        $this->date=$date;
    }

    function Header() {
        // Logo
        $this->Image('Images/p3.jpeg', 10, 10, 30); // Remplacez 'logo.png' par le chemin vers votre logo

        // Titre de l'en-tête
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(0, 15, 'Parc d\'attraction ', 0, 1, 'C');

        // Informations sur la réservation
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 10, 'Date de reservation : ' . date('d/m/Y'), 0, 1, 'R');

        // Ligne de séparation
        $this->SetDrawColor(0, 0, 0);
        $this->SetLineWidth(0.5);
        $this->Line(10, 50, $this->GetPageWidth() - 10, 50);
        $this->Ln(5);
    }

    function Footer() {
        // Positionnement à 1,5 cm du bas de la page
        $this->SetY(-15);

        // Texte du pied de page
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Parc d\'attraction  - Page ' . $this->PageNo(), 0, 0, 'C');
    }

    function Content() {
        // Informations du client
        $this->Ln(15);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Informations du client', 0, 1, 'L');
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 10, 'Nom : ' . utf8_decode($this->nom), 0, 1, 'L');
        $this->Cell(0, 10, 'Prenom : ' . utf8_decode($this->prenom), 0, 1, 'L');
        $this->Cell(0, 10, 'Adresse : ' . utf8_decode($this->adresse), 0, 1, 'L');
        $this->Cell(0, 10, 'Telephone : ' . utf8_decode($this->tel), 0, 1, 'L');
        $this->Cell(0, 10, 'Date de naissance : ' . utf8_decode($this->dateNaissance), 0, 1, 'L');
        $this->Cell(0, 10, 'Email : ' . utf8_decode($this->email), 0, 1, 'L');
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Informations sur billet', 0, 1, 'L');
        $this->SetFont('Arial', '', 12);
        $this->Cell(0, 10, 'Type de billet : ' . utf8_decode($this->type), 0, 1, 'L');
        $this->Cell(0, 10, 'Date de visite : ' . utf8_decode($this->date), 0, 1, 'L');
        $this->Cell(0, 10, 'Adulte : ' . utf8_decode($this->adulte), 0, 1, 'L');
        $this->Cell(0, 10, 'Enfant : ' . utf8_decode($this->enfant), 0, 1, 'L');
        $this->Cell(0, 10, 'Prix total : ' . utf8_decode($this->prix).' dh', 0, 1, 'L');
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, 'Remarques et informations supplementaires :', 0, 1, 'L');
        $this->SetFont('Arial', '', 10);
        $this->MultiCell(0, 10, '* Veuillez porter des chaussures confortables pour profiter au maximum des attractions. Les animaux de compagnie ne sont pas autorises dans le parc.', 0, 'L');
        $this->MultiCell(0, 10, '* Consultez le programme des spectacles pour connaitre les horaires et les emplacements des differentes representations.', 0, 'L');
        $this->MultiCell(0, 10, '* Decouvrez nos nombreux restaurants et stands de nourriture proposant une variete de plats pour satisfaire toutes les envies.', 0, 'L');
        $this->MultiCell(0, 10, '* En cas de besoin, vous pouvez nous contacter au 123-456-789 ou par e-mail a info@parc-attractions.com.', 0, 'L');
    }
    
}



?>
