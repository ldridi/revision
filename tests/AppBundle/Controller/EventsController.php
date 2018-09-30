<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EventsController {

	/**
	 * @Route("/events")
	 */
	public function indexAction(){
		return render('je suis lotfi');
	}
}