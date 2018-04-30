<?php

	
 include_once 'C:/wamp64/www/AvenirCulturel/core/bookcore.php';
                   
                  $book = New bookcore();

                    $existingname = $book->Afficher_sort_id();



	if (isset($_POST['suggestion'])) 
	{
		$name = $_POST['suggestion']; ?>
<thead>
                     <tr>
                      <tr>
                      <th>ID             </th>
                      <th>NOM            </th>
                      <th>Prix           </th>
                      <th>Genre          </th>
                      <th>Quantite      </th>
                      <th>ACTION      </th>
                      
                 
                    </tr>
</thead>	
<?php

		if(!empty($name)){

foreach ($existingname as $existingname) {
			if ( (strpos($existingname['NOM'],$name) !==false)  || (strpos($existingname['ID'],$name) !==false) || ($existingname['PRIX']==$name) || ($existingname['QUANTITE']==$name) ) {
				
				 echo '<tr>';
                            echo '<td>'. $existingname['ID'] . '</td>';
                            echo '<td>'. $existingname['NOM'] . '</td>';
                            echo '<td>'. $existingname['PRIX'] . '</td>';
                            echo '<td>'. $existingname['GNERE'] . '</td>';
                            echo '<td>'. $existingname['QUANTITE'] . '</td>';


                              echo '<td width=360>';
                                echo '<a class="btn btn-primary" href="read_livre.php?id='.$existingname['ID'].'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update_livre.php?id='.$existingname['ID'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="modifier_quantite.php?id='.$existingname['ID'].'">quantite</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete_livre.php?id='.$existingname['ID'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
			}

			}
		}else {

			foreach ($existingname as $existingname) {
				 echo '<tr>';
                            echo '<td>'. $existingname['ID'] . '</td>';
                            echo '<td>'. $existingname['NOM'] . '</td>';
                            echo '<td>'. $existingname['PRIX'] . '</td>';
                            echo '<td>'. $existingname['GNERE'] . '</td>';
                            echo '<td>'. $existingname['QUANTITE'] . '</td>';


                              echo '<td width=360>';
                                echo '<a class="btn btn-primary" href="read_livre.php?id='.$existingname['ID'].'">Read</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="update_livre.php?id='.$existingname['ID'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-success" href="modifier_quantite.php?id='.$existingname['ID'].'">quantite</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete_livre.php?id='.$existingname['ID'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
				}
			}
		}


	


















 ?>