<?php

	
  include_once 'C:/wamp64/www/AvenirCulturel/core/auteurcore.php';
                   
                  
                   $auter = new Auteurcore();

                    $existingname = $auter->afficher_order_id();



	if (isset($_POST['suggestion'])) 
	{
		$name = $_POST['suggestion']; ?>
<thead>
                     <tr>
                      <tr>
                      <th>ID             </th>
                      <th>NOM            </th>
                      
                      
                 
                    </tr>
</thead>	
<?php

		if(!empty($name)){

foreach ($existingname as $existingname) {
			if ( (strpos($existingname['NOM'],$name) !==false)  || (strpos($existingname['ID'],$name) !==false) ) {
				
				 echo '<tr>';
                            echo '<td>'. $existingname['ID'] . '</td>';
                            echo '<td>'. $existingname['NOM'] . '</td>';
                           


                              
                              echo '<td width=250>';
                                echo '<a class="btn btn-primary" href="read_auteur.php?id='.$existingname['ID'].'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update_auteur.php?id='.$existingname['ID'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete_auteur.php?id='.$existingname['ID'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';

			}

			}
		}else {

			foreach ($existingname as $existingname) {
				  echo '<tr>';
                            echo '<td>'. $existingname['ID'] . '</td>';
                            echo '<td>'. $existingname['NOM'] . '</td>';
                           


                              
                              echo '<td width=250>';
                                echo '<a class="btn btn-primary" href="read_auteur.php?id='.$existingname['ID'].'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update_auteur.php?id='.$existingname['ID'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete_auteur.php?id='.$existingname['ID'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
				}
			}
		}


	


















 ?>