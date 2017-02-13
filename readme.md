## Deploying to Heroku

Run the following commands in this order:

- heroku login
- heroku create <app_name> 
- heroku buildpacks:set heroku/php
- heroku builpacks:add https://github.com/heroku/heroku-buildpack-nodejs 
- heroku buildpacks
- heroku addons:add heroku-postgresql:hobby-dev
- heroku config:set APP_ENV=production
- heroku config:set DB_CONNECTION=heroku
- heroku config:set APP_KEY=<app_key> 
- heroku config:set APP_URL=<heroku_app_url>