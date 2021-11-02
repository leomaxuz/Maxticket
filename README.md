# Getting started
## Minimum Requirements
Maxticket should run on most pre-configured LAMP or LEMP environments as long as certain requirements are adhered to. Maxticket is based on the Laravel Framework

 Note: There are two main versions of Maxticket. Version 2.0+ which requires PHP 7.1.3 minimum. Then there is the older Laravel 5.2 branch which will work off PHP 5.6 to PHP 7.1. You can read Which version of Maxticket do I use to help in making a decision on what version of Maxticket to go with. You should be able to use the master branch as this is kept stable

## PHP Requirements
PHP >= 7.1.3 for the master branch
OpenSSL PHP Extension
PDO PHP Extension
Mbstring PHP Extension
Tokenizer PHP Extension
Fileinfo PHP Extension
GD PHP Extension
MySQL Requirements

MySQL version 5.7 or higher required
Manual Installation Steps

## Download the Latest Release or simply
```git clone https://github.com/leomaxuz/MaxTicket
cd Maxticket
git checkout master
```
into your document root on your webserver. Make sure the public folder of the project is the document root of your server e.g. /somepath/public where public is the public folder of the Maxticket project.

## Make a copy of the environment configuration file
```cp .env.example .env
```

Make sure the following files/folders are writable by the webserver user.
To find out the webserver user for Apache see this server fault post
To find out the webserver user for Nginx see this server fault post

Failure to get permissions correct can cause Maxticket to not work correctly. When browsing to the installer page in the last step the installer will double check permissions however if you don’t set the correct permissions below you won’t be able to get to the installer.

Change the folders below to be owned by the webserver user. www-data is used below but your web server may differ.
```chown -R www-data storage/app
chown -R www-data storage/framework
chown -R www-data storage/logs
chown -R www-data storage/cache
chown -R www-data bootstrap/cache
chown -R www-data .env
```

Change the folders below to have write permissions
```chmod -R a+w storage/app
chmod -R a+w storage/framework
chmod -R a+w storage/logs
chmod -R a+w storage/cache
chmod -R a+w bootstrap/cache
chmod -R a+w .env
```

Run composer to install the various libraries. You will need composer installed. Composer installation instructions can be found here
```
composer install
```

Maxticket uses the Laravel framework so you need to generate an application key.
```
php artisan key:generate
```

Create a MySQL database that you will use for your installation of Maxticket. You will need to enter these details on the installation screen.

Navigate to http://your-ticket-site.com/install and you should see the installer screen if everything is configured correctly on your webserver. If you don’t see the installer screen something is mis-configured. If you get an error on screen whoops something went wrong take a look at the log file in ./storage/logs as it will contain the error. If there is no log file again make sure that storage/logs is writable by the webserver user. Also check the webservers log file as it may contain an error message that will help with debugging. Please make sure your webserver is configured correctly to run Laravel Web applications. More details can be found here
If you do get the installer screen like below but there are errors please correct them before trying to proceed and install Maxticket. Once you have corrected the errors simple refresh the page so the installer can run the checks again.