<?php

namespace ZippyMail\Resource;

use ZippyMail\Resource\Base;

class Campaign extends Base {
    public function getSubject()
    {
        return 'campaigns';
    }
    public function pause($uid) {
        return $this->makeRequest($uid . '/pause', 'POST');
    }
}