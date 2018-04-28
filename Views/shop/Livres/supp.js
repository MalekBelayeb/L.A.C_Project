$(document).ready(function(){


$("#id_supp").click(function(){

$.ajax({

		url:"supprimer_comment.php?id="+$("#supp").val(),
		success : function (data){

		}

	});




});









	


















});