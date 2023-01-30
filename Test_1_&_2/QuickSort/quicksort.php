<?php


class BubbleSort{
    public function bubbleSort($array)
    {
        if (!$length = count($array)) {
        return $array;
        }	
        for ($outer = 0; $outer < $length; $outer++) {
            for ($inner = 0; $inner < $length; $inner++) {
                if ($array[$outer] < $array[$inner]) {
                    $tmp = $array[$outer];
                    $array[$outer] = $array[$inner];
                    $array[$inner] = $tmp;
                }
            }
        }
    }

    public function quickSort($array)
    {
        if (!$length = count($array)) {
            return $array;
        }
        
        $k = $array[0];
        $x = $y = array();
        
        for ($i=1;$i<$length;$i++) {
            if ($array[$i] <= $k) {
                $x[] = $array[$i];
            } else {
                $y[] = $array[$i];
            }
        }
        return array_merge(quickSort($x),array($k),quickSort($y));
    }
}