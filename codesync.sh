#!/bin/bash
VboxServer=192.168.1.100
DIR="$(dirname $(readlink -f $0))"
cmd=$1; folder=$(echo $2 | sed 's/\/$//')

confirm() {                        # call with a prompt string or use a default
    read -r -p "${1:-Continue? [y/N]} " response
    case "$response" in
        [yY][eE][sS]|[yY]) 
            true
            ;;
        *)
            false
            ;;
    esac
}

push() {
    echo "Pushing $1"
    rsync -azP $DIR/$1 pr@$VboxServer:~/lapsync/ --exclude='.vagrant' --dry-run
    confirm && rsync -azP $DIR/$1 pr@$VboxServer:~/lapsync/ --exclude='.vagrant'
}

pull() {
    echo "Pulling $1"
    rsync -azP pr@$VboxServer:~/lapsync/$1 $DIR/ --exclude='.vagrant' --dry-run
    confirm && rsync -azP pr@$VboxServer:~/lapsync/$1 $DIR/ --exclude='.vagrant'
}

eval $cmd $folder