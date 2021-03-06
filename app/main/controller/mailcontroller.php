<?php
/**
 * Created by PhpStorm.
 * User: Exodus
 * Date: 30.08.2015
 * Time: 14:48
 */

namespace controller;

class MailController extends \SMTP{


    public function __construct(){

        $host   = Controller::getEnvironmentData('SMTP_HOST');
        $port   = Controller::getEnvironmentData('SMTP_PORT');
        $scheme = Controller::getEnvironmentData('SMTP_SCHEME');
        $user   = Controller::getEnvironmentData('SMTP_USER');
        $pw     = Controller::getEnvironmentData('SMTP_PASS');

        parent::__construct($host,$port,$scheme,$user,$pw);

        // error handling
        $this->set('Errors-to', '' . Controller::getEnvironmentData('SMTP_ERROR') . '>');
    }

    /**
     * send registration key
     * @param $to
     * @param $msg
     * @return bool
     */
    public function sendRegistrationKey($to, $msg){

        $this->set('To', '<' . $to . '>');
        $this->set('From', 'Pathfinder <' . Controller::getEnvironmentData('SMTP_FROM') . '>');
        $this->set('Subject', 'Registration Key');
        $this->set('Error-To', '<' . Controller::getEnvironmentData('SMTP_ERROR') . '>');
        $this->set('MIME-Version', '1.0');
        $this->set('Content-Type', 'text/html; charset=ISO-8859-1');
        $status = $this->send($msg);

        return $status;
    }
}