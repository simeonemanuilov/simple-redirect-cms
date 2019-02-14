SIMPLE REDIRECT SYSTEM

.htaccess
 - forward all requests to index.php file
 - if any other records necessairy - you shold place them on the top of main record

data.csv
 - CSV format with maping of redirects
 - no header of CSV needed
 - first column should be relative path in current domain
 - second column should be absolite URL in target domain

index.php
 - main controller
 - in future some settings can be applied
 - by default it makes 301 redirects