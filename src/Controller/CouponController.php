<?php

namespace App\Controller;
use App\Entity\Coupon;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CouponController extends AbstractController
{
    /**
     * @Route("/coupon", name="coupon")
     */
    public function index()
    {
		$repo = $this->getDoctrine()->getRepository(Coupon::class);
		$coupon = $repo->find(1);
        return $this->render('coupon/index.html.twig', [
            'controller_name' => 'CouponController',
            'repo' => $repo,
            'coupon' => $coupon,
        ]);
    }
}
