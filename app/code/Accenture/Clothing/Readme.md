## Module Clothig for Accenutre
This Module create by override of magento-catalog


bin/magento dev:urn-catalog:generate misc.xml
sudo mv misc.xml .idea/ and restart IDE

### Integration for return value from db table

used file: 

- app/code/Accenture/Clothing/etc/db_schema.xml
- app/code/Accenture/Clothing/Model/Line.php

    nin/magento s:up

after declaration of db_schema.xml lanch the command 

    bin/magento setup:db-declaration:generate-whitelist

this command generated db_schema_whitelist.json



## Last Cours repo
https://github.com/magento95/testprojectrepo/blob/main/.php-cs-fixer.dist.php
