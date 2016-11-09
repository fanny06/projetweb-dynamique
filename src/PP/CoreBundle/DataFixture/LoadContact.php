<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace OC\PlatformBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Contact;
use OC\PlatformBundle\Entity\Image;
/**
 * Description of LoadArticles
 *
 * @author Fanny
 */
class LoadContact implements FixtureInterface{
    
    public function load(ObjectManager $manager){
        $articles = [
            [
                'name' => 'Fanny',
                'firstname' => 'Tilkin',
                'mail' => 'fanny.tilkin....',
                'photo' => 
                    [
                        'alt' =>"dev symfony",
                        'src' => 'http://www.vulgaris-medical.com/sites/default/files/styles/big-lightbox/public/field/image/actualites/2016/02/12/le-chat-source-de-bienfaits-pour-votre-sante.jpg'

                    ]
            ]
        ];
        
        foreach ($articles as $article){
            $contact = new Contact();
            $contact
                ->setName($article['name'])
                ->setFirstname($article['firstname'])
                ->setMail($article['Mail'])
                ;
            $image = new Image();
            $image
                ->setUrl($article['image']['src'])
                ->setAlt($article['image']['alt'])
                ;
            $contact->setImage($image);
            
            $manager->persist($contact);
        }
        
        $manager->flush();
    }
}
