<h2>Codeus Test App</h2>

<h4><b>App Installation from Github</b></h4>

<a target="_blank" href="https://github.com/markotaskovic93/codeus-test-app">Codeus Test App Github Repository</a>

<p>1) Clone Codeus Test App on local server ( xampp, mamp, wamp )</p>
<p>2) Run command -> composer install</p>
<p>3) Run command -> npm install</p>
<p>4) Make copy of (.env.example) configuration file and give her a name (.end). At the end you must have file with this name (.env)</p>
<p>5) Inside .env file you alredy made, set configuration parameters for database: DB_DATABASE, DB_USERNAME, DB_PASSWORD</p>
<p>6) Create database in your local server and import files. All files for database will be on this route ( codeus-test-app/database/files )</p>
<p>7) Start the App with this command -> php artisan serve</p>


<h4>About Application</h4>

<p>Application contains 3 parts:</p>
<p><b>User part</b></p>
<p><b>Admin part</b></p>
<p><b>REST api service for communication with other applications.</b></p>

<p>User can only buy a product. When user click on buy button this item and his vouchers will be automatically deleted. Reason for that is because currently we don't need to store this product in order table or fullfiled order cuz we don't have ordering system in this app. This is just an example.</p>

<p>When we click on dashboard button we'll be redirected to admin area where we can add new product. On the same page bellow we'll see table with product and button for editing product. When we click edit product button we'll be redirected to  page where we can apply new voucher or delete current active voucher.</p>

<p>REST api service is very simple CRUD system where we don't have authorization or similar things. We only can see all products, one product, add new product and delete product. I use POSTMAN for testing REST API and if you want I can send you screen shot. You don't need to specify any header information cuz this is very simple REST CRUD service.</p>


<h4>REST API routes</h4>

<p>All Products -> local-path /api/all-products</p>
<p>Add Product -> local-path /api/add-product</p>
<p>Delete Product -> local-path /api/delete-product/ID</p>