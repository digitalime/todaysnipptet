<?php


//<?php
/**
 * today
 *
 * Automatically returns todays date in (almost) any date format you want. Uses strftime http://php.net/manual/en/function.strftime.php
 *
 * Examples: 
 *
 * [!today!]
 * Default. Return the timestamp of the current date
 *
 * [!today? &format=`%Y`!]
 * Returns the current year (useful for copyright notices)
 * 
 * [!today? &format=`%e`%b %Y!]
 * Returns the current date as 29 Jun 2017
 *
 * @category 	snippet
 * @version 	0.1
 * @license 	http://www.gnu.org/copyleft/gpl.html GNU Public License (GPL)
 * @internal	@properties
 * @internal	@modx_category Content
 *
 * @param $format {strong} - strftime format for output
 */

$dateformat = (isset($format)) ? $format : "%s"; //UNIX timestamp as default
return strftime($dateformat);
?>
