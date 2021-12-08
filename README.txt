Hotel-Reservation-System(Elastic Beanstalk Link : http://devops-x19203896.us-east-1.elasticbeanstalk.com/index.php)

About system
*************************************************************************************************************************************
This application built in PHP, HTML, and CSS.

*************************************************************************************************************************************
***How To Run The Project on local machine***

Pre-requisites :
1.Clone the respository from URL "https://github.com/Nehadeshpande89/devops_NCI_Neha.git"
2.Install PHP on your local machine
3.Install Xampp on your machine

*************************************************************************************************************************************
***Steps to follow***
STEP I   : To run this project,you must have installed XAMPP on your PC.
STEP II  : After Starting Apache and MySQL in XAMPP, follow the steps from step III.
STEP III : Extract the ZIP file 
STEP IV  : Copy the project folder
STEP V   : Paste in xampp/htdocs/
STEP VI  : Import the database.sql file into phpMyAdmin
After creating database 
STEP VII : Open a browser and Run using URL "http://localhost/devOps_NCI_Neha"

*************************************************************************************************************************************


*** How to deploy the project on Public cloud***

Pre-requisits : 
1.You must have AWS account
2.You must have Mysql Workbench 
3.You must have git installed on your local machine
4.Clone the respository from URL "https://github.com/Nehadeshpande89/devops_NCI_Neha.git" 

*************************************************************************************************************************************
***Steps to follow***

STEP I    : Create elastic beanstalk environment with sample application using PHP platform
STEP II   : Create RDS instance for MYSQL using standard create and make it publically accessible.Put the endpoint of an instance in 'config.php'.Also put the same endPoint in mysql workbench and import databsase.sql file there.
STEP III  : Push the cloned code in your personal respository.(Prefer to use main branch)
STEP IV   : Go to the AWS CodePipeline Service
STEP V    : Connect the pipeline with your GitHub repository
STEP VI   : For Build stage select AWS Code Build and select then click on create project in AWS CodePipeline
Step VII  : Name the specification file as 'addspec.yml'
STEP VIII : Select host provider as AWS elastic beanstalk in AWS CodePipeline
STEP IX   : Select the AWS elastic beanstalk environment
STEP X    : Create AWS CodePipeline 
STEP XI   : Click on URL Of elastic beanstalk, and you are ready to host.

*************************************************************************************************************************************