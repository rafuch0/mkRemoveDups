#!/bin/bash

find . -type f -exec md5sum '{}' \; > MD5Sums

cat MD5Sums | sort | uniq -D -w 32 | sed s/'\.\/'//g | sed s/"  "/","/ > tmp.csv
rm MD5Sums
