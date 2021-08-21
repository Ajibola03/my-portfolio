<?php

class MailTemplate {
    /**
     * @param $template EmailTemplate|int|string EmailTemplate object to use or id of the template in the database
     * @param $data string[] an associative array containing data to replace in the template based on their keys<br/>
     * <b>Possible array keys</b>: contact_or_marketer_name, password_reset_link, contact_name, school_name, marketer_name
     * @return string
     */
    public static function render($template, $data, $var = null)
    {
        $temp = file_get_contents($template);
        foreach ($data as $key => $value) {
            $search_array[] = '${'.$key.'}';
            $replace_array[] = $value;
        }
        $data = str_replace($search_array, $replace_array, $temp);
        $data = preg_replace('/\${.*}/', '', $data);
        return $data;
    }
}