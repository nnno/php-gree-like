<?php

class Gree_Like
{
    public function get_button($url = '', $options = array())
    {
        $options['height'] = isset($options['height']) ? $options['height'] : 20;
        $options['type']   = isset($options['type']) ? $options['type'] : 0;

        $format = '<iframe src="http://share.gree.jp/share?url=%s&type=%d&height=%d" scrolling="no" frameborder="0" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:100px; height:20px;" allowTransparency="true"></iframe>';

        $output = sprintf($format, urlencode($url), $options['type'], $options['height']);
        return $output;
    }
}
