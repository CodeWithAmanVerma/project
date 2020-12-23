<?php
    
    /**
     * DATABASE - Configuration
     * 
     * Host
     * Port
     * Database Name
     * Database Username
     * Database Password
     */
    require APP_PATH . "/config/database.php";

    /**
     * MODEL - Configuration
     * 
     * The fundamental model class that can be extended for further use.
     */
    require APP_PATH . "/app/Core/Model.php";

    /**
     * CONTROLLER - Configuration
     * 
     * The fundamental controller class that can be extended for further use.
     */
    require APP_PATH. "/app/Core/Controller.php";