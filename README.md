Simple CRUD systems that allows user to create, update and delete elements from a Database

The system can be tested using a localserver like Apache with XAMPP, WAMPP, etc.

In order to create the Database use the config.php document to connect to the server and start creating the Database and the table.

The rest of the files are very straight forward and allow users to login to the System using the next credentials:
  - Username : 'admin'
  - Password : 'admin'

The username or password can be changed in the login.php document just by modifying the data stored in variables $adminC and $passwordC.

In order to force users to login into the System to access the Database, Sessions are implemented and are created as long as the user logs in with the correct credentials.
