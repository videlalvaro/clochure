#!/bin/sh

find . -type f -name *.clj | while read file
do 
    # sed -e 's/(/,(/g' "$file" > "$file".s1
    # sed -e 's/)/),/g' "$file".s1 > "$file".s2
    # sed -e 's/\[/(/g' "$file".s2 > "$file".s3
    # sed -e 's/]/)/g' "$file".s3 > "$file".s4
    # sed -e 's/,(/\[/g' "$file".s4 > "$file".s5
    # sed -e 's/),/]/g' "$file".s5 > "$file".s6
    # mv "$file".s6 "$file"
    # rm "$file".s5
    # rm "$file".s4
    # rm "$file".s3
    # rm "$file".s2
    # rm "$file".s1
    php ./replace.php "$file"
done