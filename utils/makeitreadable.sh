#!/bin/sh

find $1 -type f -name *.clj | while read file
do
    php ./replace.php "$file"
done