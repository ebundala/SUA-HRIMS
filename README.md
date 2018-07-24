# SUA-HRIMS
how to setup on your local machine
## 1. get git client from here https://git-scm.com/
## 2. clone the repository on your development server 
run the following command within your local server public directory (htdocs for xammp) using your terminal of choice(cmd,bash etc)
```sh
$ cd .../path to your server 
$ git clone https://github.com/ebundala/SUA-HRIMS.git
```
## 3. rename the downloaded folder(SUA-HRIMS) to HRIMS
## 4. create a database using your tool of choice 
 name it (hris), if your db has password and the user is not a default user root then 
 change the configuration in [database.php] 
 in [application>config] folder
 ##5. now visit localhost/HRIMS on your browser
 
