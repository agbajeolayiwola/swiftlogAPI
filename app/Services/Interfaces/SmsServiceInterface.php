<?php
namespace App\Services\Interfaces;

interface SmsServiceInterface {
    public function sendSms($messages, $telephoneNumber);
}
