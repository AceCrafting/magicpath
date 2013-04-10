/*
 * magicpath.php
 * Copyright 2013 Stefano Sabatini
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at 
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

function magicpath($folder='', $partial = NULL) {
  $slash=strrpos(__FILE__, '/')? "/" : "\\";
	$B = substr(__FILE__, 0, strrpos(__FILE__, $slash));
	$A = substr($_SERVER['DOCUMENT_ROOT'], strrpos($_SERVER['DOCUMENT_ROOT'], $_SERVER['PHP_SELF']));
	$C = substr($B, strlen($A));
	$posconf = strlen($C) - strlen($folder);
	$D = substr($C, 1, $posconf);
	$D = '/' .str_replace ("\\","/",$D ). '/';
	return $partial ?  $D :  'http://' . $_SERVER['SERVER_NAME'] . $D ;
}

function mp($folder='', $partial = NULL) {
	$C = substr(substr(__FILE__, 0, strrpos(__FILE__, (strrpos(__FILE__, '/')? "/" : "\\"))), strlen(substr($_SERVER['DOCUMENT_ROOT'], strrpos($_SERVER['DOCUMENT_ROOT'], $_SERVER['PHP_SELF']))));
	return ($partial ? '': 'http://' . $_SERVER['SERVER_NAME'] . '/'). str_replace ("\\","/",substr($C, 1, (strlen($C) - strlen($folder) -2 )) ). '/';
}
