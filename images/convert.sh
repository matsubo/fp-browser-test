#!/bin/zsh


convert source.jpg -resize 17.05% out.png && ls -al out.png | awk '{print $5;}'


