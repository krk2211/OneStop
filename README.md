# OneStop

## Follow the setup instructions below.
1.  Clone the Repository (recursively to include PHP-Mailer submodule)
    ```
    $ git clone https://github.com/krk2211/OneStop.git
    ```

2. Edit the dbconf.php file.

3. After setting up the database following steps 4-9, run the website from Start1.php.

4. Create the products table.
```sql
CREATE TABLE IF NOT EXISTS `tblproduct` (
`id` int(8) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
`code` varchar(255) NOT NULL,
`image` text NOT NULL,
`price` double(10,2) NOT NULL,
PRIMARY KEY (`id`),
UNIQUE KEY `product_code` (`code`)
)
```

5. Create a table of the users.
```sql
CREATE TABLE `members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

6. Create a table to keep track of the Login Attempts.
```sql
CREATE TABLE `loginAttempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

7. Create the Shopping Cart.
```sql
CREATE TABLE `checkout` (
  `name` varchar(15) NOT NULL,
  `quantity` int(3) NOT NULL,
  `price` int(10) NOT NULL,
  `user` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```
8. Create table containing items.
```sql
CREATE TABLE `item` (
  `name` varchar(15) NOT NULL,
  `quantity` int(2) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
```

9. Add items to the table.
```sql
INSERT INTO `item` (`name`, `quantity`, `price`) VALUES
('iphone', 10, 75000),
('note', 5, 70000),
('htc', 7, 53999),
('one', 3, 27000),
('mac', 4, 225000),
('alien', 3, 155000),
('razer', 6, 125000),
('solo', 15, 33999),
('hesh', 5, 15999),
('at', 21, 10999),
('sennheiser', 5, 21999),
('qc25', 8, 39999),
('qc35', 4, 49999),
('studio', 7, 35999),
('cx275', 13, 799),
('xb50', 15, 1599),
('sound', 11, 11999),
('tab3', 18, 75999),
('pro4', 12, 58999),
('ipad4', 25, 125000),
('samsung', 19, 559999),
('sony', 21, 499999);
```

10. Use `<?php require "login/loginheader.php"; ?>` To require session usage.


## TO-Dos

- [X] \(Optional) Replace the Title in every file with OneStop.

- [ ] \(Optional) In the php folder, in all the files, add "../" to the links to About, Registration and Contact Us.

- [ ] Create pages for About, Registration and Contact Us.

- [x] Design a shopping cart page.

- [X] Add the contents of shopping cart page.

- [x] Replace the home icon with Start1.php

- [ ] Add the session require and shopping cart hyperlink to all files.
