1. Move Skidwanlai folder to C:/xampp/htdocs

2. Create database "b31_18685913_scw" via phpmyadmin

3. Import "b31_18685913_scw.sql" to the database

4. Configure database connection.
Locate "db_connect.php" in both "C:\xampp\htdocs\Skidwanlai\main\function" and "C:\xampp\htdocs\Skidwanlai\Administrator\pages\function"

5. Make VHOST:

"C:\xampp\apache\conf\extra\httpd-vhosts.conf"

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/Skidwanlai"
    ServerName skidwanlai.dev
</VirtualHost>

AND

Open notepad as Administrator and locate
C:\Windows\System32\drivers\etc\hosts"

add this line:

127.0.0.1	skidwanlai.dev

6. Restart apache

7. Open browser and go to skidwanlai.dev

8. To access administrator, press CTRL+SHIFT+F5 on the homepage

9. Enjoy