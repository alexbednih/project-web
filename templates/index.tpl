<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>{$site_name}</title>
</head>
<body>
		<div id="login">
			<br />
				{$names}
			<br />
		</div>
		<div id="topmenu">
                  {if isset($loginn)}
		  <a href="addst.php">Добавить запись</a>
                  {/if}
		</div>
		<div class="mainpanel" id="top-rsidebar">
		  {$content}                  
		</div>
		<div class="mainpanel" id="top-lsidebar">
			<ul>
				<li><a href="index.php">Главная</a>
				<li><a href="index.php?action=2">Обратная связь</a>
			</ul>
		</div>
		<div class="mainpanel" id="bottom-lsidebar">
			
		</div>
		<div class="mainpanel" id="main">
                  {include file="main.tpl"}
		</div>
		<div id="footer">
			<p>BledAks &copy</p>
		</div>
	</body>
</html>
