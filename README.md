<h2>Codeus Test App</h2>

<h4><b>App Installation</b></h4>

<p>1) Clone Codeus Test App on local server ( xampp, mamp, wamp )</p>
<p>2) Run command -> composer install</p>
<p>3) Run command -> npm install</p>
<p>4) Make copy of (.env.example) configuration file and give her a name (.end). At the end you must have file with this name (.env)</p>
<p>5) Inside .env file you alredy made, set configuration parameters for database: DB_DATABASE, DB_USERNAME, DB_PASSWORD</p>
<p>6) Create database in your local server and import files. All files for database will be on this route ( codeus-test-app/database/files )</p>
<p>7) Start the App with this command -> php artisan serve</p>


<h4>About Application</h4>

<p>Application contains 3 parts:</p>
<b>User part</b>
<b>Admin part</b>
<b>REST api service for communication with other applications.</b>