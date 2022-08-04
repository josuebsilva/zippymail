<?php

namespace ZippyMail\Resource;

use ZippyMail\Resource\Base;

class SendingServer extends Base {
    public function getSubject()
    {
        return 'sending_servers';
    }
}