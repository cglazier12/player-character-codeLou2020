This is Chris Glaziers submission for the front end project class for spring 2020. There are a few steps needed to run this application on your local machine

STEP 1: The backend of this application is built using the php framework, Laravel. As such you will need a local environemnt set up in order to view it in a web browser. 
    If on Windows I strongly recommend laragon.
    If on Mac I strongly recommend MAMP. 
    
STEP 2: Clone the repo. 
    If laragon it should be c\laragon\www
    if mamp it should be c\MAMP\htdocs
    
STEP 3: download dependencies.
    $ npm intall
    you may have to run $ npm audit fix afterwards
    
    Important to note that this README will not cover installing PHP or installing composer. If you download laragon, both of these should be installed on your machine when installing that software. if using MAMP, it will download PHP on your machine but NOT composer. Refer to google for installing composer and PHP on your machine if issues arrise.
    
STEP 4: You will likely need to run $ composer update

STEP 4.1: the .env file is ignored. you will need to go here https://github.com/laravel/laravel/blob/master/.env.example 

        copy and paste that and save it as .env in the root of the project directo 
        
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=playerCharacter
        DB_USERNAME=root
        DB_PASSWORD=
        
        Good time to mention that you will need some database software. I use TablePlus
        
        this above code is the only part that is pertinant. You will need to create a mySQL connection that works the info placed here.
        for example. my DB is called playerCharacter. and my username is root and i have no password set. Also note that localhost and port match what is displayed in your preferred DB managing software.
    
STEP 5: $ php artisan key:generate

STEP 6: I have included factories vie laravel that will allow you to create fake database entries so the dynamic content will load and be viewable. 
        $php artisan tinker
        
        $ factory(App\Sheet::class, 5)->create();
        
        this will create 5 fake character sheets with appropriate values randomly assigned. the code for this login can be found in app\database\factories\SheetFactory. Note there is also a factory for users however the password is hashed so there is little benefit in running it. If interested in creasting fake users you can replace App\Sheet in the above syntax with App\User and create fake users. 
        
STEP 7: register your account
        When I use laragon, my url is http://player-character-codelou2020.test/ 
        
        If you are using MAMP your url will be different.
        
STEP 8: Double check and make sure you user id in the database matches a sheet id created using php artisan tinker. I use laravel O-auth to handle registration and log in. If a users id doesnt match a sheet table id in the local instance you will see next to nothing. 



The front end routing is handled through vue router. 

backend routes can be found in web.php. I use axios for all GET/POST requests. 

controllers hold the backend logic, mainly fetching and updating the database for the particular user. app\Http\Controller\SheetController is where most of the logic is handled. 

Some css can be found under \public but most styling is scoped in my vue components. 

This application was only ever designed to work on mobile, I use bootstrap grid for much of the layout consideration but it is plain ugly on desktop. Their are far better systems that are designed to work on a full screen such as an actual editable pdf of a DND 5e character sheet. This app looked to solve a unique problem so large screens were never considered. 

If any issues arise during the process of configuration reach out to me on slack and I will do what I can to help.
        
