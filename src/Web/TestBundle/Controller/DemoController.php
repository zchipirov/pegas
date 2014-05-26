<?php

namespace Web\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Web\TestBundle\Form\ContactType;

class DemoController extends Controller
{
    public function indexAction()
    {
        return $this->render('WebTestBundle:Welcome:index.html.twig', 
                array('page' => 'welcome'));
    }
    
    public function aboutAction()
    {
        return $this->render('WebTestBundle:Welcome:about.html.twig', 
                array('page' => 'about'));
    }

    public function contactAction(Request $request)
    {
        $form = $this->createForm(new ContactType());
        $form->handleRequest($request);
        $result = "";
        if ($request->getMethod() == 'POST') {
            $mailer = $this->get('mailer');
            
            $params = array();
            foreach ($form->getNormData() as $key => $value) {
                $params["$key"] = $value;
            }

            $message = \Swift_Message::newInstance()
                ->setSubject('Подтверждение регистрации')
                ->setFrom('chipirov@yandex.ru')
                ->setTo('ivan.golubovskiy@pegast.ru')
                ->setBody($this->renderView('WebTestBundle:EmailTemp:email.html.twig', 
                        array('params' => $params, 'content' => "Фиксированная подпись сообщения.")), 
                        'text/html');
            
            if ($mailer->send($message)) {
                $result = "Сообщение успешно отправлено :)";
            }
            else {
                $result = "Сообщение не отправлено ;(";
            }
        }
        return $this->render('WebTestBundle:Welcome:contact.html.twig', 
                array('page' => 'contact', 'message'=>$result, 'form' => $form->createView()));
    }
}
