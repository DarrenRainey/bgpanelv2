cpu = cat /proc/stat | grep 'cpu ' /proc/stat | awk '{usage=($2+$4)*100/($2+$4+$5)} END {print usage "%"}'
echo CPU Usage = "$cpu"