$(document).ready(function(){
	$("#create_task").submit(function (event){
		event.preventDefault();

		var form=$(this);

		var name=$("#name").val();
		var description=$("#description").val();

		//console.log(name);
		//console.log(description);
		if(name =='' || description ==''){
			alert("Please Enter name and Dscription First");
			return false;
		}
		var formdata=form.serialize();

		$.ajax({
			url :'create.php',
			method :'post',
			data:formdata,
			success :function(data){
				$("#ajax_msg").css("display","block").delay(3000).slideUp(3000).html(data);
				document.getElementById("create_task").reset();
			}
		});


		
	});
	$("#task-list").load("read.php");
});

function editable(div){
	div.style.border="1px solid lavender";
	div.style.padding="5px";
	div.style.background= "white";
	div.contentEditable=true;
}

function updateName(target,id){
	var data=target.textContent;
	target.style.border="none";
	target.style.padding="0px";
	target.style.background= "#ececec";
	target.contentEditable=false;
	
	//alert(data);
	$.ajax({
		url :'update.php',
		method :'post',
		data:{name : data,id :id},
		success :function(data){
			$("#ajax_msg").css("display","block").delay(3000).slideUp(3000).html(data);
		//	document.getElementById("create_task").reset();
		}
	});
	
}
function updateDescription(target,id){
	var data=target.textContent;
	target.style.border="none";
	target.style.padding="0px";
	target.style.background= "#ececec";
	target.contentEditable=false;
	
	//alert(data);
	$.ajax({
		url :'update.php',
		method :'post',
		data:{description : data,id :id},
		success :function(data){
			$("#ajax_msg").css("display","block").delay(3000).slideUp(3000).html(data);
		//	document.getElementById("create_task").reset();
		}
	});
}

function updatStatus(target,id){
	var data=target.textContent;
	target.style.border="none";
	target.style.padding="0px";
	target.style.background= "#ececec";
	target.contentEditable=false;
	
	//alert(data);
	$.ajax({
		url :'update.php',
		method :'post',
		data:{status : data,id :id},
		success :function(data){
			$("#ajax_msg").css("display","block").delay(3000).slideUp(3000).html(data);
		//	document.getElementById("create_task").reset();
		}
	});
}

function deletetask(id){
	if(confirm("Are you sure want to delete this task ?")){
		$.ajax({
			url :'delete.php',
			method :'post',
			data:{id :id},
			success :function(data){
				$("#ajax_msg").css("display","block").delay(3000).slideUp(3000).html(data);
			//	document.getElementById("create_task").reset();
			}
		});
		$("#task-list").load("read.php");
	}
	
}
