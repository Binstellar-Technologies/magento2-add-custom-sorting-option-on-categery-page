## Magento2 Add Custom Sorting option on categery page(A - Z, Z - A, High to Low Price, Low to High Price)

> Magento2 Category page by default has 3 sorting options Position, Name & Price. Here, we have added new custom options named as

A - Z (Alphabetical Order Sorting)
Z - A (Reverse Alphabetical Order Sorting)
Low to High Price (Price Low to High Order Sorting)
High to Low Price (Price High to Low Order Sorting)

> Since there is mainly a need to have a custom option from client to add & display more sorting options. In that case..

Wondering how to achieve that? Don't worry we have got the solution for it.

> Install our module Binstellar/Sorting & get 4 sorting options as mentioned above.


## Installation Steps

Step 1 : Download the Zip file from Github & Unzip it
Step 2 : Create a directory under app/code/Binstellar/Sorting
Step 3 : Upload the files & folders from extracted package to app/code/Binstellar/Sorting
Step 4 : Go to the Magento2 Root directory & run following commands

php bin/magento setup:upgrade 
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento cache:flush


## Note : We have tested this option in Magento ver. 2.4.5-p1