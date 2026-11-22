#!/data/data/com.termux/files/usr/bin/bash

cd "$(dirname "$0")"

php -d opcache.enable=0 \
    -d opcache.enable_cli=0 \
    -S 127.0.0.1:8000 \
    -t .
0

