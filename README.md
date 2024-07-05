Yii in Docker Template
======================

Template for quick start working with yii in docker container on local server.

Get this template
-----------------

```shell
git clone https://github.com/Ktulchu/Yii_in_docker.git docker-yii2
```

Start Docker Compose
--------------------
```shell
cd docker-yii2
./docker_commands.sh
```

Application
--------------------
the public part is located in the site folder
to change, replace the root string in the file docker/nginx/etc/vhost.conf
```
root /app/path/file/index.php;
```

make sure that the file exists at the specified path


```shell
docker-compose restart nginx
```

Change Local host hame
--------------------

Default localhost: http://task.local/
To change the host name, replace the server_name task.local line in the file docker/nginx/etc/vhost.conf and write it to /etc/hosts



```
127.0.0.1 hostname
```
```shell
docker-compose restart nginx
```

Now you can open your app via:

http://hostname/

The template for development using Yii2 is ready