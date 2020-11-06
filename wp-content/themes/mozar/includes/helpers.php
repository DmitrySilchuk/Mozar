<?php


if (!function_exists('get_num_ending')) {
    /**
     * @param $number
     * @param $ending_array
     * @return mixed
     */
    function get_num_ending($number, $ending_array)
    {
        $number = $number % 100;
        if ($number >= 11 && $number <= 19) {
            $ending = $ending_array[2];
        } else {
            $i = $number % 10;
            switch ($i) {
                case (1):
                    $ending = $ending_array[0];
                    break;
                case (2):
                case (3):
                case (4):
                    $ending = $ending_array[1];
                    break;
                default:
                    $ending = $ending_array[2];
            }
        }
        return $ending;
    }
}
