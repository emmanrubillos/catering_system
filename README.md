<p align="center"><a href="https:facebook.com" target="_blank"><img src="https://ih1.redbubble.net/image.5090039015.1125/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.u9.jpg" width="400"></a></p>

<h1>Steps to do after Cloning</h1>

<ul>run composer install</ul>
<ul>run touch .env (and then copy&paste .env file@bottom)</ul> 
<ul>run php artisan key:generate</ul>
<ul> make a database in your SQL named "catering_db"</ul>
<ul>run php artisan migrate</ul>
<ul>run php artisan db:seed --class=AdminSeeder</ul>
<ul>npm install && npm run dev</ul>
<ul>run php artisan optimize</ul>
<ul> run php artisan serve</ul>

<h1>Make a new branch</h1>
<ul>git branch (Para makahibaw ka unsa ka nga branch ron)</ul>
<ul>git branch -name-of-branch- (Ilisda ag -name-of-branch- sa imong branch prefferably imong name)</ul>
<ul>git checkout -name-of-branch (Para mo balhin ka sa bago nga branch nga imong g himo)</ul>

<h1 align="center">G na nah</h1>

<p align="center"><a href="https:facebook.com" target="_blank"><img src="https://i.imgur.com/R0fuzVA.gif" width="400"></a></p>

<h1>.env File sample</h1>
<p>
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:qkpFRj61p3pH8hceo5YeiMbESbbHR91WOIzPj8TUrT0=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=catering_db
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
</p>
