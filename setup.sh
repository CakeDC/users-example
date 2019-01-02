#!/usr/bin/env bash
if [[ $# -eq 0 ]] ; then
    echo "Please inform the new password for demo users"
    exit 1
fi

bin/cake migrations migrate -p CakeDC/Users
bin/cake migrations migrate

sed -i -e "s/__USERS_PASSWORD__/$1/g" config/.env

bin/cake migrations seed
