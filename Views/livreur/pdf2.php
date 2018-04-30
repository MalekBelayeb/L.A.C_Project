<?php  
 function fetch_data()  
 {  
      $output = '';  
    
   

      include "../../Entity/laivraison.php";
include "../../Core/laivraisonC.php";



if (isset($_POST["cin"])){
    $employeC = new laivraisonC();
    $result=$employeC->recupererLaivraison($_POST["cin"]);

    foreach($result as $row){
        $code_Livraison=$row['code_Livraison'];
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        $adresse_ligne_1=$row['adresse_ligne_1'];
        $adresse_ligne_2=$row['adresse_ligne_2'];
        $ville=$row['ville'];
        $mail=$row['mail'];
     
        }




   /*$code_Livraison="z";
        $nom="z";
        $prenom="z";
        $adresse_ligne_1="z";
        $adresse_ligne_2="z";
        $ville="z";
        $mail="z";*/
         
      $output .= '<tr>  
                          <td>'.$code_Livraison.'</td> 
                          <td>'.$nom.'</td>  
                          <td>'.$prenom.'</td>  
                          <td>'.$adresse_ligne_1.'</td>  
                          <td>'.$adresse_ligne_2.'</td>  
                          <td>'.$ville.'</td> 
                          <td>'.$mail.'</td>  


                     </tr>  
                          ';  }
      
      return $output;  
 }  
 if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in PHP");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 12);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h3 align="center">reçus de livraison  </h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="10%">code_Livraison</th> 
                <th width="12%">nom</th>  
                <th width="10%">prenom</th>  
                <th width="14%">adresse_ligne_1</th>  
                <th width="14%">adresse_ligne_2</th>  
                <th width="15%">ville</th> 
                <th width="28%">mail</th>  

           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>'; 
      $content .= '<br><br><br><br>';
      $content .= 'signatur client ';

      $obj_pdf->writeHTML($content);  
      $obj_pdf->Output('sample.pdf', 'I');  
 }  
 ?> 