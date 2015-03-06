#!/bin/bash

SHA=$(openssl sha1 radic.phar)
SHA=$(echo "$SHA" | sed -e "s/SHA1(radic.phar)= //g")
#echo "$SHA"

    TAG_LAST="$(git describe --abbrev=0 --tags)"
    TAG_PATCH="$(git describe --abbrev=0 --tags | cut -f 3 -d .)"
    TAG_MINOR="$(git describe --abbrev=0 --tags | cut -f 2 -d .)"
    TAG_MAJOR="$(git describe --abbrev=0 --tags | cut -f 1 -d . | sed -e 's/v//g')"
    NEW_TAG="${TAG_MAJOR}.${TAG_MINOR}.$((TAG_PATCH+1))"

echo "$SHA and $NEW_TAG"

sed "s/SHA/$SHA/g" manifest.json > newmanifest.json
sed -i "s/VERSION/$NEW_TAG/g" newmanifest.json
