<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{

    public function renderDefault ()
    {
        return [
            'title' => 'Default'
        ];
    }

    #[Route('/products', name: 'products')]
    public function index(): Response
    {
        $products = $this->getDoctrine()->getRepository(Product::class)
            ->findAll();
        $forRender = $this->renderDefault();
        $forRender['products'] = $products;
        $forRender['title'] = 'Здесь выводятся продукты';
        return $this->render('product/index.html.twig', $forRender);
    }
    
    #[Route('/products/create', name: 'product_create')]
    public function createProduct (Request $request) 
    {
        $em = $this->getDoctrine()->getManager();
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $em->persist($product);
            $em->flush();
            $this->addFlash('success', 'Продукт создан');

            return $this->redirectToRoute('products');
        }

        $forRender = $this->renderDefault();
        $forRender['title'] = 'Создание продукта';
        $forRender['form'] = $form->createView();
        return $this->render('product/form.html.twig', $forRender);
    }
        
}