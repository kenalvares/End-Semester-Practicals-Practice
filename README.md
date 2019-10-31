# End-Semester-Practicals-Practice
Practice Question for End Semester Practical Exams covering HTML, CSS, JS &amp; PHP

## Setup
1. Download this repository into a folder in the htdcos folder of xampp.
2. Go into the php files and replace database details.
3. Start xampp server and view in browser.

## Pages
#### index.html
Contains a dashboard menu to 'Add', 'Modify', 'Delete' or 'View' users in a database

#### add_user.html
Contains a form that is validated using JavaScript's inbuilt validation functions (required, checked, type="email", etc) and some RegEx validations (name shouldn't have a number or special character)
Data gets inserted via PHP into Database. (PHP code in insert.php)

#### modify_user.html
Contains a form to modify the language preference of a user by entering their user ID (from table) and new language. (PHP code in update.php)

#### delete_user.html
Enter the User ID from the database and delete the respective user (PHP code in delete.php)

#### view.php
Contains code to display all user data in a table
