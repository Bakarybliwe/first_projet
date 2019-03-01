<?php

/**
 * Display the interactive map
 * 
 * @author Florian Rival
 */

namespace Tuto\controler;

use Tuto\framework\Controleur;

class ControlerIndex extends Controleur {

	private $em;
	/** @var \Doctrine\Common\Persistence\ObjectRepository */
    private $companyRepository;
	
	/** @var \Doctrine\Common\Persistence\ObjectRepository */
    private $productRepository;

	/** @var \Doctrine\Common\Persistence\ObjectRepository */
    private $voteRepository;
    
    /** @var \Doctrine\Common\Persistence\ObjectRepository */
    private $voteAdminRepository;
	
	/** @var string Default layout */
    private $defaultLayout = 'adminDefault.php';

	public function __construct($entityManager) {
		//$this->em  = $entityManager;
		//$this->companyRepository = $entityManager->getRepository('\\Tuto\\model\\Societe');
		//$this->productRepository = $entityManager->getRepository('\\Tuto\\model\\Produit');
		//$this->voteAdminRepository = $entityManager->getRepository('\\Tuto\\model\\VoteAdmin');
		
		//$this->voteRepository = $entityManager->getRepository('\\Tuto\\model\\Vote');
		
		// For SQL queries debug
//		$entityManager->getConnection()
//					  ->getConfiguration()
//					  ->setSQLLogger(new \Doctrine\DBAL\Logging\EchoSQLLogger());
    }
    
    /**
     * Display list of product
     */
    public function index() {
   
		$viewAction = 'index';
        $this->genererVue(array(), $viewAction, $this->defaultLayout);
    }
	


	
	
	



	

	
	


	


	

	
	
	

}
