<?php  
 function fetch_data()  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "baseprojet");  
      $sql = "SELECT * FROM participant ORDER BY id ASC";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      {       
      $output .= '<tr>  
                          <td>'.$row["id"].'</td>  
                          <td>'.$row["nom"].'</td>  
                          <td>'.$row["prenom"].'</td>  
                          <td>'.$row["email"].'</td>  
                          <td>'.$row["pays"].'</td>

                     </tr>  
                          ';  
      }  
      return $output;  
 }  
 if(isset($_POST["create_pdf"]))  
 {  
      require_once('tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Liste Des Produit Valable Chez La Dacqouise");  
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
      <h3 align="center">Liste Des Produit Valable Chez La Dacqouise</h3><br /><br />  
      <table border="1" cellspacing="0" cellpadding="5">  
           <tr>  
                <th width="20%">id</th>  
                <th width="20%">nom  </th>  
                <th width="20%">prenom</th>  
                <th width="9%">email</th>  
                <th width="20%">pays</th>
                
           </tr>  
      ';  
      $content .= fetch_data();  
      $content .= '</table>';  
      $obj_pdf->writeHTML($content);  
      ob_end_clean();
      $obj_pdf->Output('sample.pdf', 'I');  
 }  
 ?> 