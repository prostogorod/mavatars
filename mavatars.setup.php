<?php

/**
 * [BEGIN_COT_EXT]
 * Code=mavatars
 * Name=MAvatars
 * Description=Adding files for cotonti modules
 * Version=3.0
 * Date=20-may-2015
 * Author=esclkm littledev.ru
 * Copyright=(c)esclkm
 * Notes=
 * Auth_guests=R
 * Lock_guests=W12345A
 * Auth_members=RW
 * Lock_members=
 * Recommends_modules=page
 * [END_COT_EXT]

 * [BEGIN_COT_EXT_CONFIG]
 * items=01:select:0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16:8:Attachments per post (max.)
 * set=99:textarea::||datas/mavatars|datas/mavatars|0||:Format settings cat|path|thumb path|reqiured|ext|mazfilesize
 * turnajax=02:radio::1:
 * turncurl=03:radio::0:
 * filecheck=04:radio::1:
 * separator_viewer=90:separator:0:0:Viewer config
 * width=91:string::800:Image width* 
 * height=92:string::640:Image height
 * method=93:select:crop,width,height,auto:width:Resize Method
 * [END_COT_EXT_CONFIG]
 */
/**
 * MAVATAR for Cotonti CMF
 *
 * @version 1.00
 * @author  esclkm, graber
 * @copyright (c) 2015 esclkm, graber
 */

defined('COT_CODE') or die('Wrong URL');
