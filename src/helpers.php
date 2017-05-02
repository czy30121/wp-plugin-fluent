<?php

use Samrap\Acf\Acf;

if (! function_exists('fluent_field')) {
    /**
     * Return a new builder instance for a field.
     *
     * @param  string  $name
     * @param  int  $id
     * @return \Samrap\Acf\Fluent\Builder
     */
    function fluent_field($name, $id = null)
    {
        return Acf::field($name, $id);
    }
}

if (! function_exists('fluent_sub_field')) {
    /**
     * Return a new builder instance for a subfield.
     *
     * @param  string  $name
     * @return \Samrap\Acf\Fluent\Builder
     */
    function fluent_sub_field($name)
    {
        return Acf::subField($name);
    }
}

if (! function_exists('fluent_option')) {
    /**
     * Return a new builder instance for an option field.
     *
     * @param  string  $name
     * @return \Samrap\Acf\Fluent\Builder
     */
    function fluent_option($name)
    {
        return Acf::option($name);
    }
}
