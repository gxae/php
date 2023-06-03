#!/bin/bash


WEB_PATH='/www/wwwroot/nasdaqhome.com'
echo "start deployment"
php start.php -d restart 
echo "end run start.php deployment"
echo "start deployment"
php think worker:gateway -d restart
echo "start run worker:gateway deployment"
echo "start deployment"
php think worker:server -d restart
echo "start run workerserver deployment"
echo "start deployment"
php think queue:restart
echo "start run queue deployment"
echo "ok....success"
