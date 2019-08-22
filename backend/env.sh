#!/bin/bash

cd "../private/"
rm "env.example"
cp ".env" "env.example"
# Replaces [= "something in here"] to [= ""]
sed -i -e "s/\( = \".*\"\)/ = \"\"/g" "env.example"
# Removes commented lines
sed -i -e "s/\(# .*\)//g" "env.example"