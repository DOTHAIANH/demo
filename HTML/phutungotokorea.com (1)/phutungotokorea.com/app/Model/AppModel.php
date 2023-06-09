<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');
App::uses('CakeEmail', 'Network/Email');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {
      
	function redirect($url)
	{
		echo '<script type="text/javascript">window.location= "'.$url.'";</script>';
		die;
	}
	
	function sendMail($from=array(),$to=array(),$cc=array(),$bcc=array(),$subject='',$content='',$typeConfig='default')
	{
        $email = new CakeEmail($typeConfig);
        $email->from($from);
        $email->to($to);
        $email->cc($cc);
        $email->bcc($bcc);
        $email->subject($subject);
        $email->template('default');
        $email->emailFormat('html');
        $email->viewVars(array('content'=>$content));
        
        try{
            $email->send();
            return true;
        }catch(Exception $e){
            return $e;
        }
    }
    
}
