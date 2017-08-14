<html>
<head>
	<title>文章管理</title>
</head>
<body>
	<form action="./PaperClass.php" method="post">
		<table>
			<tr>
				<td>
					标题：
				</td>
				<td>
					<input type="text" name="title" />
				</td>
			</tr>
			<tr>
				<td>
					摘要：
				</td>
				<td>
					<textarea name="abstract"></textarea><br/>
				</td>
			</tr>
			<tr>
				<td>
					正文：
				</td>
				<td>
					<textarea name="content"></textarea><br/>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit"/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>