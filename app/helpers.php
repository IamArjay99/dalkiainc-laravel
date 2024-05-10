<?php
    use Illuminate\Support\Facades\DB;

    function get_client_ip() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    function get_client_browser() {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/MSIE/i',$user_agent)) {
            return "Internet Explorer";
        } elseif (preg_match('/Trident/i',$user_agent)) {
            return "Internet Explorer";
        } elseif (preg_match('/Firefox/i',$user_agent)) {
            return "Mozilla Firefox";
        } elseif (preg_match('/Chrome/i',$user_agent)) {
            return "Google Chrome";
        } elseif (preg_match('/Safari/i',$user_agent)) {
            return "Apple Safari";
        } elseif (preg_match('/Opera/i',$user_agent)) {
            return "Opera";
        } else {
            return "Unknown";
        }
    }

    function update_analytics() {
        $ip_address = get_client_ip();
        $browser = get_client_browser();
        $today = date('Y-m-d');

        $website_user = DB::table('website_users')
            ->where('date', $today)
            ->where('ip_address', $ip_address)
            ->where('browser', $browser)
            ->first();

        if ($website_user) {
            DB::table('website_users')
                ->where('date', $today)
                ->where('ip_address', $ip_address)
                ->where('browser', $browser)
                ->update([
                    'page_views' => DB::raw('page_views + 1')
                ]);
        } else {
            DB::table('website_users')
                ->insert([
                    'date' => $today,
                    'ip_address' => $ip_address,
                    'browser' => $browser,
                    'page_views' => 1
                ]);
        }
    }

?>