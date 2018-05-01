<?php
ob_start();
session_start();
include '../Config.php';
include '../Entity/Panier.php';
$panier=new Panier();
$idc = (isset($_POST['id']) ? $_POST['id'] : null);
    ?>
<style type="text/css">
    table{ border-collapse: collapse; width: 100%;color: #717375; font-size: 15px; font-family: Helvetica; line-height: 6mm; letter-spacing: 2px}
    table strong{color: #000;}
    td.right{text-align: right; margin: 0; padding: 0;}
    h1{color: #000;}
    table.border td{border: 1px solid #CFD1D2; padding: 3mm 1mm;}
    table.border th,td.black{background: #000; color: #FFF; font-weight: normal; border: solid 1px #FFF;}
    td.noborder{border: none;}
</style>
<page backtop=""20mm backleft="10mm" backright="10mm" backbottom="30mm">
    <page_footer>
        <hr>
    </page_footer>
    <table style="vertical-align: top">
        <tr>
            <td style="width: 75%">
                <br>
                <img src="../Views/wp-content/themes/book-junky/assets/images/logo-2.png"><br>
                <em>
                    22 Rue de Parc <br>
                    2036 La Soukra Ariana<br>
                    Tunis
                </em><br>
                <p>
                <strong>Destinataire:</strong>
                <br>
                    <?= $_SESSION['id']?><br>

                </p>

            </td>
            <td>

            </td>
        </tr>
    </table>
    <table style="vertical-align: bottom; margin-top: 10mm">
        <tr>
            <td style="width: 50%">
                <h1>Facture N°<?=$idc?></h1>
            </td>
            <td style="width: 50%" class="right">
                Emis le <?= date('d/m/Y')?>
            </td>
        </tr>
    </table>
    <table class="border">
        <thead>
        <tr>
            <th style="width: 64%">Description</th>
            <th style="width: 12%">Quantité</th>
            <th style="width: 12%">Prix Unitaire</th>
            <th style="width: 12%">Montant</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $id = array_keys($_SESSION['panier'],!0,false);
            $pdo = Connexion::getConnexion();
            $sql = 'SELECT * FROM book where ID IN (' . implode(',', $id) . ')';
            $stmt = $pdo->prepare($sql);
            $product = $stmt->execute();
            $product = $stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($product as $livre):
                ?>
            <tr>
                <td><?= $livre->NOM ?></td>
                <td><?= $_SESSION['panier'][$livre->ID] ?></td>
                <td><?= number_format($livre->PRIX, 2); ?> &pound;</td>
                <td><?= number_format($panier->total_produit($livre->ID), 2); ?> &pound;</td>
            </tr>
            <?php endforeach;?>
            <tr>
                <td colspan="2" class="noborder"></td>
                <td class="black">Total:</td>
                <td><?= number_format($panier->total(),2);?> &pound;</td>
            </tr>
        </tbody>
    </table>
</page>

<?php
$content=ob_get_clean();
require_once '../api/html2pdf/vendor/autoload.php';

try{
    $pdf=new HTML2PDF('P','A4','fr');
    $pdf->writeHTML($content);
    $ids=array_keys($_SESSION['panier']);
    foreach ($ids as $id)
    {
        unset($_SESSION['panier'][$id]);
    }
    $pdf->output('panier.pdf','D');
    header('location:http://localhost/projet/Views/Payment.php');

}catch (HTML2PDF_exception $e){
    die($e);
}
?>

