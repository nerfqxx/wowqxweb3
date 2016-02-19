<?php
/**
* Copyright (C) '2016' Server WoW <>
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation; either version 2 of the License, or
* (at your option) any later version.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software
* Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
**/

/*
|--------------------------------------------------------------------------|
| Info: CMS Language SISTEMA.
|--------------------------------------------------------------------------|
| Specifies the Language that your CMS will show.
| Under Heavy Work. Please do not touch.
|--------------------------------------------------------------------------|
*/
define('LANGUAGE',	'es');

/*
|--------------------------------------------------------------------------|
| Info: CMS Language SISTEMA END.
|--------------------------------------------------------------------------|
*/
/*
|--------------------------------------------------------------------------|
| Info: CMS Community SISTEMA.
|--------------------------------------------------------------------------|
| Important Links to Social sites & the title of the CMS.
| Under Heavy Work. Please do not touch.
|--------------------------------------------------------------------------|
*/
define('TITLE',		'WoW Qx Server');
define('FACEBOOK', 	'https://www.facebook.com/');
define('TWITTER',  	'https://twitter.com/');
define('YOUTUBE',  	'https://www.youtube.com/');
define('REDDIT',   	'https://www.reddit.com/');

/*
|--------------------------------------------------------------------------|
|  Soap settings
|--------------------------------------------------------------------------|
| Bind SOAP service to IP/hostname.
| TCP port to reach the SOAP service.
| SOAP IP		= 127.0.0.1
| SOAP PORT		= 7878
| SOAP SOAP		= 1#1 // EXAMPLE
| USER PASSWORD = your password account
| SOAP KEY		= your key
*/
define('SOAP_IP',		'127.0.0.1');
define('SOAP_PORT', 	'7878');
define('SOAP_USER', 	'');
define('SOAP_PASS', 	'');
define('SOAP_KEY',		'abcdefghijklmnopqrstuvwxyz0123456789');

/*
|--------------------------------------------------------------------------|
| Info: DO NOT TOUCH THESE UNLESS YOU KNOW WHAT YOU ARE DOING.
|--------------------------------------------------------------------------|
*/
define('REALMLIST',		'wowserver.sytes.net');
define('BASE_URL',		'http://wowserver.sytes.net/');
define('ADMIN_URL',		'http://wowserver.sytes.net/admin/');
define('CUENTA_URL',	'http://wowserver.sytes.net/account/');
define('TIMEZONE',		'America/Costa_Rica');

/*
|--------------------------------------------------------------------------|
| SISTEMA Core CMS FlameNet.
|--------------------------------------------------------------------------|
*/
require('nucleo.php');
