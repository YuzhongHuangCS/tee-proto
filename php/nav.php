	<nav class="navbar navbar-default" role="navigation">
		<!-- mobile view -->
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#tee-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.php">Tee-Shirt</a>
		</div>

		<!-- PC view -->
		<div class="collapse navbar-collapse" id="tee-navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="more.php">发现</a></li>
				<li><a onclick="login()">现在开始</a></li>
			</ul>

			<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<span class="glyphicon glyphicon-search"></span>
				<input type="text" class="form-control" placeholder="搜索项目">
			</div>
			</form>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" id="loginButton" onclick="login()">注册 / 登录</a></li>
			</ul>
		</div>
	</nav>