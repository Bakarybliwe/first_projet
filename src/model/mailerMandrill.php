<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace LBC\model;

use \Mandrill;

class mailerMandrill
{
  
  public  $mandrill;
  //public  $mailerType;

/*  public function __construct()
  {
   		
    $this->mailerType = 'mandrill';
  }*/

  /**
   * Create a new Mailer instance.
   * 
   * @param Swift_Transport $transport
   * @return Swift_Mailer
   */


 public function sendMail_Mandrill($sendto,$name, $send_from,$send_from_name, $subject, $message, $cc_adress=null)
        {
                 $this->mandrill = new \Mandrill('ZoFsQdTiZNlofNxczi3TGg');
                // $this->mandrill = new Mandrill('ZoFsQdTiZNlofNxczi3TGg');
		$send_from=$send_from;
		$send_from_name=$send_from_name;
	
		// Sujet
		$Subject=$subject;
	
		// Message
		$messages= $message;	

		// email / Name
		$sendto			= $sendto;
		$name			= $name;
		//$mail->AddAddress( $email, $name );
	
		// CC
		$cc_adress              = $cc_adress;
	                 
		if(!is_array($sendto)){
			$sendto = array(
					array(
						"email"	=> $sendto,
						"name"	=> $name,
						"type"	=> "to"
					)
			);
		}
		
		else{
			$sendto = $sendto;
		}
		
						
			$message = array(
					'html' => $messages,
					'text' => $messages,
					'subject' => $Subject,
					'from_email' => $send_from,
					'from_name' =>  $send_from_name,
					'to' => $sendto,
					'headers' => array('Reply-To' => ''),
					'important' => false,
					'track_opens' => null,
					'track_clicks' => null,
					'auto_text' => null,
					'auto_html' => null,
					'inline_css' => null,
					'url_strip_qs' => null,
					'preserve_recipients' => null,
					'view_content_link' => null,
					'bcc_address' => $cc_adress,
					'tracking_domain' => null,
					'signing_domain' => '',
					'return_path_domain' => null,
					'merge' => true,
					'global_merge_vars' => array(
							array(
									'name' => 'merge1',
									'content' => 'merge1 content'
							)
					),
						
					'tags' => array('SalonsCe'),
					//'subaccount' => 'testAnd1544',
					'google_analytics_domains' => array('salonsce.com'),
					'google_analytics_campaign' => 'message.from_'.'salonsce.com',
					'metadata' => array('website' => 'test'),
		);
			//echo '<pre>$message';print_r($message);echo '</pre>';
			
			$async		= false;
			$ip_pool	= 'Main Pool';
			$send_at	= null;
			$result = $this->mandrill->messages->send($message, $async, $ip_pool, $send_at);
			//echo '<pre>';print_r($result);echo '</pre>';
			
			$return		= $result[0];
			
			//rejected //invalid //reject_reason
			$failed		= array( 'rejected', 'invalid' );
			
			//"sent", "queued", "scheduled"
			$passed		= array( 'sent', 'queued', 'scheduled' );
			
			
			if ( in_array( $return['status'], $failed ) ) {
				//$this->oLog->write( "Mandrill error => ".$return['reject_reason'], 2 );
			
				return false;
			
			} else if ( in_array( $return['status'], $passed ) ){
			
				return true;
			}
			
			return false;
        }


}
