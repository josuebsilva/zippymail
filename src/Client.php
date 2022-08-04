<?php

namespace ZippyMail;

use ZippyMail\Resource\Base;
use ZippyMail\Resource\Campaign;
use ZippyMail\Resource\MailList;
use ZippyMail\Resource\Subscriber;
use ZippyMail\Resource\Plan;
use ZippyMail\Resource\SendingServer;
use ZippyMail\Resource\Customer;
use ZippyMail\Resource\Subscription;
use ZippyMail\Resource\Notification;
use ZippyMail\Resource\File;

class Client {
    private $token;
    private $uri;

    public function __construct($uri, $token)
    {
        $this->uri = $uri;
        $this->token = $token;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function campaign() {
        return new Campaign([], $this);
    }

    public function list() {
        return new MailList([], $this);
    }

    public function subscriber() {
        return new Subscriber([], $this);
    }

    public function plan() {
        return new Plan([], $this);
    }

    public function sendingServer() {
        return new SendingServer([], $this);
    }

    public function customer() {
        return new Customer([], $this);
    }

    public function subscription() {
        return new Subscription([], $this);
    }

    public function sending_server() {
        return new SendingServer([], $this);
    }

    public function notification() {
        return new Notification([], $this);
    }

    public function file() {
        return new File([], $this);
    }

    public function loginToken() {
        $base = new Base([], $this);
        return $base->makeRequest('login-token', 'POST');
    }
}