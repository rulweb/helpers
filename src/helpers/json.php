<?php

if (!function_exists('jsonEncode')) {
    /**
     * @param $value
     * @return string
     */
    function jsonEncode($value)
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
}

if (!function_exists('jsonDecode')) {
    /**
     * @param string $json
     * @param bool $assoc
     * @return mixed
     */
    function jsonDecode($json, $assoc = false)
    {
        return json_decode($json, $assoc, 512, JSON_UNESCAPED_UNICODE);
    }
}

if (!function_exists('responseJson')) {
    /**
     * @param array $data
     * @param int $status
     * @return mixed
     */
    function responseJson($data = [], $status = 200)
    {
        return response()->json($data, $status, [], JSON_UNESCAPED_UNICODE);
    }
}
