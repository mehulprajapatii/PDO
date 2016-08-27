<?php
include_once 'Database.php';

try {
	$read="select * from tasks where sta='A'";
	$stmt=$conn->query($read);
	
	while ($task=$stmt->fetch(PDO::FETCH_OBJ)){
		$created_date =strftime("%b %d %Y",strtotime($task->created_at));
		//echo {$task->id};
		//echo $task->id;
		$output="
				 <tr>
                <td title='Click to edit'><div class=\"editable1\" onclick=\"editable(this)\" onblur=\"updateName(this,{$task->id})\">$task->name</div></td>
                <td title='Click to edit'> <div class=\"editable1\" onclick=\"editable(this)\" onblur=\"updateDescription(this,{$task->id})\"> $task->description</div> </td>
                <td title='Click to edit'> <div  class=\"editable1\" onclick=\"editable(this)\" onblur=\"updatStatus(this,{$task->id})\">$task->status</div> </td>
                <td>$created_date</td>
                <td style=\"width: 5%;\"><button class='btn-danger' onclick=deletetask('{$task->id}')><i class=\"btn-danger fa fa-times\"></i></button>
                </td>
            </tr>";
		echo $output;
	}
} catch (PDOException $e) {
	echo "error".$e->getMessage();
}
?>