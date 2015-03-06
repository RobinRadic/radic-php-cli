#!/bin/bash

SHA=$(openssl sha1 radic.phar)
SHA=$(echo "$SHA" | sed -e "s/SHA1(radic.phar)= //g")
echo "$SHA"
