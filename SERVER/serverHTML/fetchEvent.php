<?php  

	require_once('../serverPHP/dbConnection.php');

	if(isset($_POST["limit"], $_POST["start"])) {

		$query = "SELECT * FROM event ORDER BY eventID DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";


		$result = mysqli_query($db, $query);

		while($row = mysqli_fetch_array($result, MYSQLI_NUM)) {

			$temp_time_segment = explode('-', $row[2]);
		    $time = end($temp_time_segment);

		    $date  = explode("/", $temp_time_segment[0]);
		    $day = $date[0];
		    $month = $date[1];
		    $year = $date[2];

			echo '
			
				<div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10">

	                        <h3>'.$row[1].'</h3>
	                        <p style="text-align: justify;">'.$row[3].'<p>
	                        <p>Published on: '.$row[4].'</p>

                            <a href="updateEvent.php?id='.$row[0].'">
                                <button type="button" class="btn btn-primary btn-sm" style="background-color: #009688;">update</button>
                            </a>
                        </div>
                        <div class="col-md-2">
                            
                            <time datetime="2014-09-20" class="icon">
                                
                                <em>'.$time.'</em>
                                <strong>'.$month.'</strong>
                                <span>'.$day.'</span>


                            </time>

                        </div>

                    </div>
                </div>	
                <hr>
			
			';




		}

	}

?>