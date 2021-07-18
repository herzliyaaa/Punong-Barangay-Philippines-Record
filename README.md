# Punong-Barangay-Philippines-Record

### Prerequisites

The things you need before running the system.

* PHP 
* XAMPP SERVER
* WEB BROWSER

### Setting up a MYSQL database

1. Go to C:\xampp\php and open php.ini
2. Make sure that the 'mysqli.allow_local_infile = On' and 'mysql.allow_local_infile=On' is enabled, simply remove the semicolon at the beginning of the line and restart the server to activate the extension. 
3. Place the phBarangay.csv in C:\xampp\mysql\data
4. Go to http://localhost/phpmyadmin/
5. Paste this SQL Query:

```sql

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `region` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `barangay_hall_tel_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
  COMMIT;


LOAD DATA INFILE 'C:\phBarangay.csv' 
INTO TABLE records FIELDS TERMINATED BY ',' 
LINES TERMINATED BY '\n' 
IGNORE 1 ROWS (region, province, city, barangay, position, last_name, first_name, middle_name, suffix, email, barangay_hall_tel_no)


```

### How to Run the Program?

1. Open the XAMPP Control Panel and start Apache and MySQL
2. Copy/Move the program folder in the htdocs folder 
3. Now to run your code, open localhost/Punong-Barangay-Philippines-Record/ in your browser. Your PHP file now run and display its output in the browser window.




