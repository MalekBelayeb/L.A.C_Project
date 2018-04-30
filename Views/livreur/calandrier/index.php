<?php
	//Creating database connection.
session_start();
echo $_SESSION['id'];
$id= $_SESSION['id'];
echo $id;
include_once"config.php";
$connect =config::getconnexion();

	//Selecting events records from events table
	$query     = $connect->query("SELECT * FROM laivraison where livreur='$id' ");
    $data  = array(); 
    $resp = array();
    $i          = 0;
    $row        = $query->rowCount();
	if($row > 0){
		while($data['events'] = $query->fetch())
		{

			$i++;
			//Geting event days
			$start = date("Y-m-d",strtotime($data['events']['date_laivraison']));//die;
            $timestamp_start = strtotime($start);
            $end = date("Y-m-d",strtotime($data['events']['date_laivraison']));
            $timestamp_end = strtotime($end);
            $diff = abs($timestamp_end - $timestamp_start); // that's it!
            
            $days = floor($diff/(60*60*24));
            $days = $days+1;
            //Defining colors to events
            if($days == 1){
                $color='#FFDAB9';
            }elseif($days > 1 and $days <= 15){
                $color='#8FBC8F';
            }elseif($days > 15 and $days <= 30){
                $color='#C0C0C0';
            }elseif($days > 30 and $days <= 60){
                $color='#90EE90';
            }else{
                $color='#F4A460';
            }
            //Creating event short name with ...
            if(!empty($data['events']['nom'])){
                for ($i = 1; $i <= $days; $i++) {
                	$add_day = $i - 1;
                    $start = date('Y-m-d', strtotime("+{$add_day} day", $timestamp_start));

                    $event_short_name = substr($data['events']['nom'] , 0, 15);
                    $sub='th';
                    if($i < 4){
                        switch ($i){
                            case 1:
                            $sub='st';
                            break;
                            case 2:
                            $sub='nd';
                            break;
                            case 3:
                            $sub='rd';
                            break;
                        }
                    }
                    $event_short_name .= ' - ('.$i.$sub.' Day)';
                    
                    $startDate = strtotime($start);
                    //Colecting data in array         
                    $resp[$start . '_' . $data['events']['code_Livraison'] . '_' . $i] = array(
                        'code_Livraison'    => $data['events']['code_Livraison'],
                        'title' => $event_short_name,
                        
                        'start' => $start,
                        'color' => $color,
                    );
                }
            }            
		}
		$resp = array_values($resp);
	}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='css/fullcalendar.css' rel='stylesheet' />
<link href='css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='js/moment.min.js'></script>
<script src='js/jquery.min.js'></script>
<script src='js/fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {

		$('#calendar').fullCalendar({
			editable: false,
			events: <?php echo json_encode($resp) ?>,
			
		});
		
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: auto;
		margin: 0 auto;
	}

</style>
</head>
<body>

	<div id='calendar'></div>

</body>
</html>