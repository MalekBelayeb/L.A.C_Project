<?php

	
  include_once 'C:/wamp64/www/AvenirCulturel/core/categorieCore.php';
                   
                  
                    $category = new CategorieCore();

                  

                    $existingname = $category->Afficher_categorie();



	if (isset($_POST['suggestion'])) 
	{
		$name = $_POST['suggestion']; ?>
 <thead>
                    <tr>
                      <th>ID             </th>
                      <th>Categorie            </th>
                      <th>ACTION</th>
                      
                     
                    </tr>
</thead>
<?php

		if(!empty($name)){

foreach ($existingname as $existingname) {
			if ( (strpos($existingname['CATEGORY'],$name) !==false)  || (strpos($existingname['ID'],$name) !==false) ) {
				
				echo '<tr>';
                            echo '<td>'. $existingname['ID'] . '</td>';
                            echo '<td>'. $existingname['CATEGORY'] . '</td>';
                     

                              echo '<td width=250>';
                                
                                echo '<a class="btn btn-success" href="update_category.php?id='.$existingname['ID'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete_category.php?id='.$existingname['ID'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
                            echo '</tr>';

			}

			}
		}else {

			foreach ($existingname as $existingname) {
				 echo '<tr>';
                            echo '<td>'. $existingname['ID'] . '</td>';
                            echo '<td>'. $existingname['CATEGORY'] . '</td>';
                     

                              echo '<td width=250>';
                                
                                echo '<a class="btn btn-success" href="update_category.php?id='.$existingname['ID'].'">Update</a>';
                                echo ' ';
                                echo '<a class="btn btn-danger" href="delete_category.php?id='.$existingname['ID'].'">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
                            echo '</tr>';
				}
			}
		}


	


















 ?>