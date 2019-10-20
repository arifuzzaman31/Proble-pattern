<?php
//3. PHP function to generate a random password (contains uppercase, lowercase, numeric and other)
	 
 echo str_shuffle(substr(str_shuffle(alphabets()),0,3).substr(str_shuffle(strtolower(alphabets())),0,3).substr(str_shuffle(numbers()),0,3).substr(str_shuffle(others()),0,3));
	
function alphabets(){
	return "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
}
function numbers(){
	return "0123456789";
}
function others(){
	return "/@$()%?*[]";
} 

?>