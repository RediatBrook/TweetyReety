# TweetyReety
A twitter clone made with Laravel
## Installing Dependencies and Local setup
First install composer. Then, run:
```
composer global require laravel/installer

laravel new example-app

cd example-app

php artisan serve
```
Copy the .env.example file to a .env file within the example-app directory. What the tilda is depends on where you saved the file.
```
cp ~/example-app/.env.example ~/example-app/.env

```
Change the .env file to fit your specific configuration. (I.e. local SQL database username, password, etc...)
```
DB_CONNECTION=mysql (You can change this to PostgreSQL or any other preferred DBMS)
DB_HOST=127.0.0.1 (This is localhost, but you cant change it if you want)
DB_PORT=3306(You can change this to your port of preference)
DB_DATABASE=tweetyreety
DB_USERNAME="YourSQLDBUsername"
DB_PASSWORD="YourSQLDBPassword"

```
Make the new example-app your current directory, then run: 
```
php artisan migrate

```
## What it looks like
### The Timeline 
![Screenshot 2021-10-08 at 11-07-13 TweetyReety](https://user-images.githubusercontent.com/42581640/140804113-45a5cd84-37d2-42cb-8ce7-8e3d88ef9824.png)
### My Profile
![Screenshot 2021-11-08 at 13-33-26 TweetyReety](https://user-images.githubusercontent.com/42581640/140806152-039941c6-eee8-4aa0-819c-e1cee14ca1cb.png)
### Edit Profile
![Screenshot 2021-11-08 at 13-34-59 TweetyReety](https://user-images.githubusercontent.com/42581640/140806313-82469b79-93a9-4918-886b-e8d0fba38909.png)
### Explore
![Screenshot 2021-11-08 at 13-36-33 TweetyReety](https://user-images.githubusercontent.com/42581640/140806498-7009030e-cbdf-4ab1-a232-0a10f07bfd84.png)
### Login
![Screenshot 2021-11-08 at 13-38-17 TweetyReety](https://user-images.githubusercontent.com/42581640/140806827-1a78c45d-8d43-450c-b9bf-491503981760.png)
### Register
![Screenshot 2021-11-08 at 13-38-03 TweetyReety](https://user-images.githubusercontent.com/42581640/140806897-01efb08c-5e46-4b8e-8d2b-fe8bb4a9bd47.png)
