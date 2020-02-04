<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use App\Entity\Contacts;


class SextansApiController extends AbstractController
{
    /**
     * @Route("/", name="sextans_api")
     */
    public function index()
    {
        /*
        return $this->render('sextans_api/index.html.twig', [
            'controller_name' => 'SextansApiController',
        ]);*/
        
        return $this->render('home/index.html.twig');
    }
    
    /**
     * Returns a JSON with the contacts stored in the database
     *
     * @Route("/api/v1/show-contacts/", name="show_contacts_api")  
     * 
     * @param Request $request
     * @return JsonResponse
     */
    public function ShowAllContactsAction(Request $request)
    {
        header("Access-Control-Allow-Origin: *");
        $em = $this->getDoctrine()->getManager();
         $query = $em->createQuery('SELECT m 
                  FROM App:Contacts m
                  ORDER BY m.id ASC');
         $contacts = $query->getResult();
         
         $responseArray = array();
        foreach($contacts as $obj){
            $responseArray[] = array(
                "id" => $obj->getId(),
                "name" => $obj->getFullname(),
                "username" => $obj->getUsername(),
                "email" => $obj->getEmail(),
                "phone" => $obj->getPhone(),
                 
                    
            );
            
                     
        }
        return new JsonResponse($responseArray);
    }
    
    /**
     * Stores a contact in the database
     *
     * @Route("/api/v1/save-contact/", name="save_contact_api")  
     * @param Request $request
     * @return JsonResponse
     */
    public function saveSingleMessageAction(Request $request)
    {
        header("Access-Control-Allow-Origin: *");
        $em = $this->getDoctrine()->getManager();
        
        $data = json_decode($request->getContent(), true);
        
        $get_fullname =$data['fullname'];
        $get_username =$data['username'];
        $get_email =$data['email'];
        $get_phone =$data['phone'];
        
        $contact = new Contacts();
        
        $contact->setFullname($get_fullname);
        $contact->setUsername($get_username);
        $contact->setEmail($get_email);
        $contact->setPhone($get_phone);
        $em->persist($contact);
        $em->flush();
        
        $responseArray[] = array(
                "id" => $contact->getFullname(),
                "message" => 'Contact stored successfully'
            );
        
         return new JsonResponse($responseArray);

    }
}
