# OneStop
1. Clone the Repository using the command
git clone https://github.com/krk2211/OneStop.git

2. After setting up the database, run the website from Start1.html.

3. Edit the dbconf.php file.

3. CREATE TABLE IF NOT EXISTS `tblproduct` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
)

4.


TO-Dos

1. Replace the Title in every file with OneStop.

2. In the php folder, in all the files, add "../" to the links to About, Registration and Contact Us.

3. Create pages for About, Registration and Contact Us.

4. Design a shopping cart page.

5. Replace the home icon with Start1.php

6. Add the session require and shopping cart hyperlink to all files.
