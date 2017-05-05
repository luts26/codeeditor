$(document).ready(function(){
	$("#cText").focus();
	$("#d2").click(function(){
		$("div.btn").hide(1000);
		$("#p_path").show(1000);
		$("#d3").click(function(){
			$("#p_path").hide(1000);
			$("div.btn").show(1000);
		});
		$("#d5").click(function(){
			var file_name = $(":text").val();
			var code_text = $("#cText").val();
			if(file_name != ""){
				$("#p_path").hide(1000);
				$("div.btn").show(1000);
				$.post("script/server.php", {n:file_name,c:code_text}, function(data){
					$("#cText").val("");
					alert("Save file '" + file_name + "'");
				});
			}
			else {
				$(":text").attr("placeholder", "Enter name file!").addClass("red");
			}
		});
	});
	$("#d1").click(function(){
		$.post("script/server.php", {l:1}, function(data){
			var str = data;
			if(str != ""){
				var arr = str.split(';');
			}
			arr.pop();
			$("#list").html("");
			for(i = 0; i < arr.length; i++){
				$("<li>" + arr[i] + "</li>").appendTo("#list");
			}
			$("#file_list").slideDown(1000);
		});
	});
	$("#file_list span").click(function(){
		$("#file_list").hide(1000);
	});
	$("#list").on('click', 'li', function(){
		var page = $(this).text();
		$("#file_list").hide(1000);
		$(":text").val(page);
		$.post("script/server.php", {fn:page}, function(data){
			$("#cText").val(data);
		});
	});
	$("#d4").click(function(){
		var file_name = $(":text").val();
		var code_text = $("#cText").val();
		if(file_name == ""){
			file_name = prompt("Your need save file, and next Run! Enter name file:");
		}
		if(file_name != null && file_name != ""){
			$(":text").val(file_name);
			$.post("script/server.php", {n:file_name,c:code_text}, function(data){
				alert(data);
				var path = data.substring(1);
				$("iframe").attr("src", path);
			});
		}
		else alert("Invalid file name!");
	});
	$(":reset").click(function(){
		$("#cText").val("");
		$(":text").val("");
		$("iframe").attr("src", "");
	});
});