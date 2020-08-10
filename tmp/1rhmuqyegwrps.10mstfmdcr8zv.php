<h1>MySQL Database Connection Information</h1>
<p>This section is how to connect to your local database. This is not something that Fat-Free can configure, but you will have to configure this directly in MySQL via CLI, PHPMyAdmin, Adminer, MySQL Bench, etc.</p>
<p>An example to setup a user for a MySQL database is below:</p>
<pre><code>
mysql> CREATE DATABASE `some_cool_database` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
mysql> GRANT ALL PRIVILEGES ON `some_cool_database`.* TO 'some_user'@'localhost' IDENTIFIED BY 'somecoolpassword';
</code></pre>
<form method="POST" action="/init-environment/update">
	<input type="hidden" name="next_page" value="security">
	<div class="form-group">
		<label for="mysql_host">Database Host</label>
		<input type="text" name="mysql_host" class="form-control" id="mysql_host" value="localhost">
	</div>
	<div class="form-group">
		<label for="mysql_host">Database Name</label>
		<input type="text" name="mysql_name" class="form-control" id="mysql_name" value="some_cool_database">
	</div>
	<div class="form-group">
		<label for="mysql_username">Database Username</label>
		<input type="text" name="mysql_username" class="form-control" id="mysql_username" value="some_user">
	</div>
	<div class="form-group">
		<label for="mysql_password">Database Password</label>
		<input type="password" name="mysql_password" class="form-control" id="mysql_password" value="somecoolpassword">
	</div>
	<div class="form-group">
		<label for="mysql_port">Database Port</label>
		<input type="number" name="mysql_port" class="form-control" id="mysql_port" value="3306">
	</div>
	<div class="form-group">
		<label for="mysql_charset">Database Character Set</label>
		<input type="text" name="mysql_charset" class="form-control" id="mysql_charset" value="utf8mb4">
	</div>
	<a href="/init-environment/choose-database" type="submit" class="btn btn-primary mb-5">Back</a>
	<button type="submit" class="btn btn-primary mb-5">Next</button>
</form>