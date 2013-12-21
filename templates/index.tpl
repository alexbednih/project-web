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
		            <a href="index.php?action=5">Добавить запись</a>
                {/if}
		</div>
		<div class="mainpanel" id="top-rsidebar">
		  {if isset($loginn)}
                Вы вошли на сайт как {$loginn}
		  {/if}
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
			{$comtent}
            {if isset($conntent)}
                {include file="addstat.tpl"}
            {else}    
                {include file="main.tpl"}
            {/if}    
		</div>
		<div id="footer">
			<p>BledAks &copy</p>
		</div>
	</body>
</html>
