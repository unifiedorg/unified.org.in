<?php namespace Unified\Lithium\Security;

class CSP {
    public static function setHeader() {
        header("Content-Security-Policy: default-src 'self'; script-src 'self'
               'unsafe-inline'; style-src 'self' 'unsafe-inline'");
    }
}
