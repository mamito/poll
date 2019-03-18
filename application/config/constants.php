<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

//define the name of categories
define('CATEGORY1',                            'Βραβείο καλύτερου ερμηνευτή');
define('ANSWER11',                            'check1');
define('ANSWER12',                            'check2');

define('CATEGORY2',                            'Βραβείο καλύτερης ερμηνεύτριας');
define('ANSWER21',                            'check1');
define('ANSWER22',                            'check2');

define('CATEGORY3',                            'Βραβείο καλύτερου συγκροτήματος');
define('ANSWER31',                            'check1');
define('ANSWER32',                            'check2');

define('CATEGORY4',                            'Βραβείο καλύτερου single της χρονιάς');
define('ANSWER41',                            'check1');
define('ANSWER42',                            'check2');
define('CATEGORY5',                            'Βραβείο καλύτερου album της χρονιάς');
define('ANSWER51',                            'check1');
define('ANSWER52',                            'check2');

define('CATEGORY6',                            'Βραβείο καλύτερου νεοεμφανιζόμενου');
define('ANSWER61',                            'check1');
define('ANSWER62',                            'check2');

define('CATEGORY7',                            'Βραβείο καλύτερου live');
define('ANSWER71',                            'check1');
define('ANSWER72',                            'check2');

define('CATEGORY8',                            'Βραβείο καλύτερου Κύπριου καλλιτέχνη');
define('ANSWER81',                            'check1');
define('ANSWER82',                            'check2');

define('CATEGORY9',                            'Βραβείου καλύτερου ξένου καλλιτέχνη');
define('ANSWER91',                            'check1');
define('ANSWER92',                            'check2');

define('CATEGORY10',                            'Βραβείο καλύτερου ξένου single');
define('ANSWER101',                            'check1');
define('ANSWER102',                            'check2');

define('CATEGORY11',                            'Best Airplay της χρονιάς');
define('ANSWER111',                            'check1');
define('ANSWER112',                            'check2');

define('CATEGORY12',                            'Ιcon της χρονιάς');
define('ANSWER121','check1');
define('ANSWER122','check2');

define('SUBMITNAME',                            'Name');
define('SUBMITNAMELABEL',                            'Name');
define('SUBMITNAMECONTENT',                            'Please type your name');

define('SUBMITEMAIL',                           'Email');
define('SUBMITEMAILLABEL',                           'Email');
define('SUBMITEMAILCONTENT',                           'Please type your Email');

define('SUBMITPHONENUMBER',                     'Phone Number');
define('SUBMITPHONENUMBERLABEL',                     'Phone Number');
define('SUBMITPHONENUMBERCONTENT',                     'Please type your Phone Number');

define('LIMTIECNT',                         1);

/* End of file constants.php */
/* Location: ./application/config/constants.php */