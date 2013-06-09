<?php
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
function magicpath($partial = NULL) {
   $slash=strrpos($_SERVER['SCRIPT_FILENAME'], '/')? "/" : "\\"; //slash or backslash?
	$B = substr($_SERVER['SCRIPT_FILENAME'], 0, strrpos($_SERVER['SCRIPT_FILENAME'], $slash)); //till last occurrence of slash
	$C = substr($B, strlen($_SERVER['DOCUMENT_ROOT']));
	$posconf = strlen($C);
	$D = substr($C, 1, $posconf);
	$D = '/' .str_replace ("\\","/",$D ). ($D!='' ? '/' : '');
	return $partial ?  $D :  'http://' . $_SERVER['SERVER_NAME'] . $D ;
}

function mp($partial = NULL) { magicpath($partial); }
?>
