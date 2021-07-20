# Punong-Barangay-Philippines-Record

### Prerequisites

The things you need before running the system.

* PHP 
* XAMPP SERVER
* WEB BROWSER

### Setting up MYSQL database

Dataset: https://www.kaggle.com/codeblu3/philippines-barangay

1. Go to C:\xampp\php and open php.ini
2. Make sure that the 'mysqli.allow_local_infile = On' and 'mysql.allow_local_infile=On' is enabled, simply remove the semicolon at the beginning of the line and restart the server to activate the extension. 
3. Place the phBarangay.csv in C:\xampp\mysql\data
4. Go to http://localhost/phpmyadmin/
5. Download the SQL file. [Download here](https://drive.google.com/file/d/1ggwif-_Pv-mj2s6eEVItRobTnHQGUNZI/view?usp=sharing)
6. Copy the SQL Query and Paste it in the SQL Tab:


### How to Run the Program?

1. Open the XAMPP Control Panel and start Apache and MySQL
2. Copy/Move the program folder in the htdocs folder 
3. Now to run your code, open localhost/Punong-Barangay-Philippines-Record/ in your browser. 

### TODO

1. Filtered Dropdown List Menu for Region, Province, City and Brgy.
2. Charts
3. UI design 


