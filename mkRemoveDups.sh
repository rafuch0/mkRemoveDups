#!/bin/bash

path=$(which doMD5.sh|sed s/"\/doMD5.sh"//)
doMD5.sh
php -f "$path/findDups.php"
rm tmp.csv
