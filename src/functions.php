<?php

if (!function_exists('notify')) {
    /**
     * Return app instance of Notify.
     * 
     * @return OsarisUk\Notify\Notifier
     */
    function notify() {
        return app('notify');
    }
}
