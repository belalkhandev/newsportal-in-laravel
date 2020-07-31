<?php
    if (!function_exists('makeDropdownList')) {
        function makeDropdownList($objects, $key='id', $value='name')
        {
            $dropdown_lists = [];
    
            if ($objects) {
                foreach ($objects as $object) {
                    $dropdown_lists[$object->$key] = $object->$value;
                }
            }
    
            return $dropdown_lists;
        }
    }
    
    if (!function_exists('database_formatted_date')) {
        function database_formatted_date($value = null) {
            
            $date = date('Y-m-d', strtotime($value));
    
            return $date;
        }
    }
    
    if (!function_exists('database_formatted_datetime')) {
        function database_formatted_datetime($date = null)
        {
            return $date ? date('Y-m-d H:i:s', strtotime($date)) : date('Y-m-d H:i:s');
        }
    }
    
    if (!function_exists('database_formatted_time')) {
        function database_formatted_time($date = null)
        {
            return $date ? date('H:i:s', strtotime($date)) : date('H:i:s');
        }
    }
    
    
    if (!function_exists('user_formatted_datetime')) {
        function user_formatted_datetime($date = null)
        {
            return $date ? date('d M, y  h:i A', strtotime($date)) : date('d M, y  h:i A');
        }
    }
    
    
    if (!function_exists('user_formatted_time')) {
        function user_formatted_time($date = null)
        {
            return $date ? date('h:i A', strtotime($date)) : date('h:i A');
        }
    }
    
    if (!function_exists('database_formatted_date')) {
        function database_formatted_date($value = null) {
            
            $date = date('Y-m-d', strtotime($value));
    
            return $date;
        }
    }
    
    if (!function_exists('user_formatted_date')) {
        function user_formatted_date($value = null) {
            
            $date = date('d-M, Y', strtotime($value));
    
            return $date;
        }
    }
    
    if (!function_exists('datepicker_formatted_date')) {
        function datepicker_formatted_date($value = null) {
            
            $date = date('d-m-Y', strtotime($value));
    
            return $date;
        }
    }

    // active and inactive status
    if (!function_exists('getStatus')) {
        function getStatus()
        {
    
            $status = [
                '1' => 'Active',
                '0' => 'Inactive',
            ];
    
            return $status;
        }
    }