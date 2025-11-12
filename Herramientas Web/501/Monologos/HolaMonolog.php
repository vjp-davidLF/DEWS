<?php

use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Level;

class Monologos {
    private $miLog;

    public function __construct() {
        $this->miLog = new Logger('Monologos');
        
        $rotatingHandler = new RotatingFileHandler(
            __DIR__ . '/../../logs/app.log',
            0,
            Level::Warning
        );
        
        $this->miLog->pushHandler($rotatingHandler);
    }

    public function saludar() {
        $this->miLog->info('El usuario ha saludado');
    }

    public function despedir() {
        $this->miLog->info('El usuario se despide');
    }
}
