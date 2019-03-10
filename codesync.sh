#!/bin/bash
code_src="$(dirname $(readlink -f $0))" # Source Code Location 
code_srv="archvm:~/lapsync/"            # Virtual Box Location

confirm() {                             # Confirm Befour Sync
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

if [ "$1" == "pull" ]; then             # set $from and $to
    DO="Downloading ..."; from=$code_srv; to=$code_src
else
    DO="Uploading ...";   from=$code_src; to=$code_srv
fi
# Rsync as per '.rsync-filter' after confirmation 
echo "$DO"; rsync -nazPF $from $to && confirm && rsync -azPF $from $to