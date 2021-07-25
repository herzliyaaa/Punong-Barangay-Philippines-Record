# Punong-Barangay-Philippines-Record

### Prerequisites

The things you need before running the system.

* XAMPP SERVER
* WEB BROWSER

### Setting up MYSQL database

Dataset: https://www.kaggle.com/codeblu3/philippines-barangay

1. Go to C:\xampp\php and open php.ini
2. Make sure that the 'mysqli.allow_local_infile = On' and 'mysql.allow_local_infile=On' is enabled, simply remove the semicolon at the beginning of the line and restart the server to activate the extension. 
3. Place the phBarangay.csv in C:\xampp\mysql\data
4. Go to http://localhost/phpmyadmin/
5. Copy and Paste the SQL queries in the SQL Tab. (Note: phbarangay.sql is in the database folder.)


### How to Run the Program?

1. Open the XAMPP Control Panel and start Apache and MySQL
2. Copy/Move the program folder in the htdocs folder (C:\xampp\htdocs\Punong-Barangay-Philippines-Record)
3. Now to run your code, open localhost/Punong-Barangay-Philippines-Record/ in your browser. 



