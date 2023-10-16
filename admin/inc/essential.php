<?php
    if (!defined('SITE_URL')) {
        define('SITE_URL', 'http://127.0.1/');
    }

    if (!function_exists('customalert')){
        function customalert($type, $msg) {
            $bs_class = ($type == 'success') ? 'alert-success' : 'alert-danger';
            echo <<<alert
            <div class="alert $bs_class alert-dismissible fade show" role="alert" style="position: fixed; right: 25px; top: 100px;">
            <strong class="me-3">$msg</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            alert;
        }
}
?>