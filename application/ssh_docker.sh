if [ $1 = "mysql" ]; then
    docker exec -it laravelvuejs_database_1 mysql -umarammat -pmarammat marammat
elif [ $1 = "nginx" ]; then
    docker exec -it laravelvuejs_web_1 bash
elif [ $1 = "php" ]; then
    docker exec -it laravelvuejs_app_1 bash
else 
    echo "Please pass container as an argument(mysql/nginx/php)."
fi        
