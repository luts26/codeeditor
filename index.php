<!DOCTYPE html>
<html>
<head>
	<title>Code Editor</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="description" type="">
	<meta name="keywords" type="">
	<script src="script/jquery-2.2.1.min.js" type="text/javascript"></script>
	<script src="script/main.js" type="text/javascript"></script>
	<link href="style/main.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div id="main_content">
		<div id="editor">
		<span style="display:inline-block;"><a href="/"><= back</a></span>
			<h2 style="display:inline-block;">Online Code Editor</h2>
				<!--required oninvalid="this.setCustomValidity('Здесь необходимо ввести имя или путь к файлу')"-->
				
			<textarea id="cText" name="file_text"><?=$stext;?></textarea>
			<div class="btn">
				<input id="d1" type="button" value="Open">
				<input id="d2" type="button" name="save" value="Save">
				<input id="d4" type="button" name="run" value="Run">
				<input type="reset" name="reset" value="Clear">
			</div>
			<div id="p_path">
				<input id="d3" type="button" value="&nbsp; <-- &nbsp;">
				<label>Enter file name: </label>
				<input type="text" name="path">
				<input id="d5" type="button" value="&nbsp; OK &nbsp;">
			</div>
			<div id="file_list">
				<p><span>X</span></p>
				<ul id="list"></ul>
			</div>
		</div>
		<div id="result_code">
			<iframe></iframe>
		</div>
	</div>
</body>
</html>