# Smart Things Server

A simple PHP app that can be deployed to Heroku to act as a server for Smart Things


## First-time installation

Install the [Heroku Toolbelt](https://toolbelt.heroku.com/).

```sh
git clone https://github.com/kanghj/iot_app_bundles.git # or clone your own fork
cd iot_app_bundles\SmartThings_Server
heroku login
heroku create
git push heroku main
heroku open
```
## Deploying changes to the server

```sh
cd iot_app_bundles\SmartThings_Server
heroku login
git add .
git commit -m <commit_description>
git push heroku main
heroku open
``` 

## Endpoints

There are 2 different endpoints to this server.

Receive new events 

Input: Event name Output: Success status of adding the event
```sh
(/requests.php?newEvent=<event>) 
 ```
 
Checks whether a particular method call is allowed. 

Input: Action name Output: True or False
```sh
(/requests.php?action=<action>) 
 ```
 
## Connecting SmartThings to this Heroku server

A sample SmartThings app is provided in the same directory. 
Copy the code and try out the app here: https://graph.api.smartthings.com/ide/apps


## Documentation

For more information about using PHP on Heroku, see these Dev Center articles:

- [Getting Started with PHP on Heroku](https://devcenter.heroku.com/articles/getting-started-with-php)
- [PHP on Heroku](https://devcenter.heroku.com/categories/php)
