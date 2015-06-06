<?php

namespace Game\Bundle\UserBundle\Controller;

use Game\Bundle\TypingMatchesBundle\Entity\AbsenceHour;
use Game\Bundle\TypingMatchesBundle\Form\UserAbsenceType;
use Game\Bundle\TypingMatchesBundle\Form\AcceptHoursForAllEmployeesFilterType;
use Game\Bundle\UserBundle\Entity\User;
use Game\Bundle\UserBundle\Form\ReportsType;
use Game\Bundle\UserBundle\Form\UserType;
use Game\Bundle\UserBundle\Form\UserPhotoType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Zend\Stdlib\DateTime;


/**
 * User controller.
 *
 */
class UserController extends Controller
  {

    public function photoAction($id)
    {
        $em   = $this->getDoctrine()->getManager();
        $user = $em->getRepository('GameUserBundle:User')->find($id);

        $response = new Response();
        $response->setContent($user->getPhotoContent());
        $response->setStatusCode(Response::HTTP_OK);

        return $response;
    }

    public function changePhotoAction($id){
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GameUserBundle:User')->find($id);

        if (!$entity)
        {
          throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm   = $this->createChangePhotoForm($entity);
        
        $photo = $this->getUser()->getPhotoContent();

        $photo_exists = false;

        if ($photo){
            $photo_exists = true;
        }          
        
        return $this->render('GameUserBundle:User:changephoto.html.twig', array(
          'entity'      => $entity,
          'edit_form'   => $editForm->createView(),
          'photo_exists' =>   $photo_exists
        ));
    }

  /**
   * Creates a form to change a User photo.
   *
   * @param User $entity The entity
   *
   * @return Form The form
   */
    private function createChangePhotoForm(User $entity)
    {
        $form = $this->createForm(new UserPhotoType(), $entity, array(
          'action' => $this->generateUrl('user_photo_update', array('id' => $entity->getId())),
          'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    
  /**
   * Edits an existing User entity.
   *
   */
    public function updatePhotoAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GameUserBundle:User')->find($id);

        if (!$entity)
        {
          throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm  = $this->createChangePhotoForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid())
        {
          $em->flush();

          return $this->redirect($this->generateUrl('user_change_photo', array('id' => $id)));
        }

        return $this->render('GameUserBundle:User:changephoto.html.twig', array(
          'entity'      => $entity,
          'edit_form'   => $editForm->createView()
        ));
    }    
    
  /**
   * Lists all User entities.
   *
   */
  public function indexAction()
    {
    $em = $this->getDoctrine()->getManager();

    $query = $em->getRepository('GameUserBundle:User')->getAllQuery();

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
    $query, $this->get('request')->query->get('page', 1), 
    5
    );

    $breadcrumbs = $this->get("white_october_breadcrumbs");
    $breadcrumbs->addItem("Home", $this->get("router")->generate("game_holy_time_homepage"));
    $breadcrumbs->addItem("Employees", $this->get("router")->generate("user"));
    $breadcrumbs->addItem("Employee list");

    return $this->render('GameUserBundle:User:index.html.twig', array(
      'pagination' => $pagination,
    ));
    }

  /**
   * Creates a new User entity.
   *
   */
  public function createAction(Request $request)
    {
    $entity = new User();
    $form   = $this->createCreateForm($entity);
    $form->handleRequest($request);

    if ($form->isValid())
      {
      $em = $this->getDoctrine()->getManager();
      $em->persist($entity);
      $em->flush();

      $id = $entity->getId();

      $notification = $this->get('notification');
      $notification->accessToApplication($id);

      return $this->redirect($this->generateUrl('user_show', array('id' => $entity->getId())));
      }

    return $this->render('GameUserBundle:User:new.html.twig', array(
      'entity' => $entity,
      'form'   => $form->createView(),
    ));
    }

  /**
   * Creates a form to create a User entity.
   *
   * @param User $entity The entity
   *
   * @return Form The form
   */
  private function createCreateForm(User $entity)
    {
    $form = $this->createForm(new UserType(), $entity, array(
      'action' => $this->generateUrl('user_create'),
      'method' => 'POST',
    ));

    $form->add('submit', 'submit', array('label' => 'Create'));

    return $form;
    }

  /**
   * Displays a form to create a new User entity.
   *
   */
  public function newAction()
    {
    $entity = new User();
    $form   = $this->createCreateForm($entity);

    $breadcrumbs = $this->get("white_october_breadcrumbs");
    $breadcrumbs->addItem("Home", $this->get("router")->generate("game_holy_time_homepage"));
    $breadcrumbs->addItem("Employees", $this->get("router")->generate("user"));
    $breadcrumbs->addItem("Add employee");

    return $this->render('GameUserBundle:User:new.html.twig', array(
      'entity' => $entity,
      'form'   => $form->createView(),
    ));
    }

  /**
   * Finds and displays a User entity.
   *
   */
  public function showAction($id)
    {
    $em = $this->getDoctrine()->getManager();

    $entity = $em->getRepository('GameUserBundle:User')->find($id);

    if (!$entity)
      {
      throw $this->createNotFoundException('Unable to find User entity.');
      }

    $breadcrumbs = $this->get("white_october_breadcrumbs");
    $breadcrumbs->addItem("Home", $this->get("router")->generate("game_holy_time_homepage"));
    $breadcrumbs->addItem("Employees", $this->get("router")->generate("user"));
    $breadcrumbs->addItem("Employee details");      
      
    $deleteForm = $this->createDeleteForm($id);

    return $this->render('GameUserBundle:User:show.html.twig', array(
      'entity'      => $entity,
      'delete_form' => $deleteForm->createView(),));
    }

  /**
   * Displays a form to edit an existing User entity.
   *
   */
  public function editAction($id)
    {
    $em = $this->getDoctrine()->getManager();

    $entity = $em->getRepository('GameUserBundle:User')->find($id);

    if (!$entity)
      {
      throw $this->createNotFoundException('Unable to find User entity.');
      }

    $editForm   = $this->createEditForm($entity);
    $deleteForm = $this->createDeleteForm($id);

    return $this->render('GameUserBundle:User:edit.html.twig', array(
      'entity'      => $entity,
      'edit_form'   => $editForm->createView(),
      'delete_form' => $deleteForm->createView(),
    ));
    }

  /**
   * Creates a form to edit a User entity.
   *
   * @param User $entity The entity
   *
   * @return Form The form
   */
  private function createEditForm(User $entity)
    {
    $form = $this->createForm(new UserType(), $entity, array(
      'action' => $this->generateUrl('user_update', array('id' => $entity->getId())),
      'method' => 'PUT',
    ));

    $form->add('submit', 'submit', array('label' => 'Update'));

    return $form;
    }

  /**
   * Edits an existing User entity.
   *
   */
  public function updateAction(Request $request, $id)
    {
    $em = $this->getDoctrine()->getManager();

    $entity = $em->getRepository('GameUserBundle:User')->find($id);

    if (!$entity)
      {
      throw $this->createNotFoundException('Unable to find User entity.');
      }

    $deleteForm = $this->createDeleteForm($id);
    $editForm   = $this->createEditForm($entity);
    $editForm->handleRequest($request);

    if ($editForm->isValid())
      {
      $em->flush();

      return $this->redirect($this->generateUrl('user_edit', array('id' => $id)));
      }

    return $this->render('GameUserBundle:User:edit.html.twig', array(
      'entity'      => $entity,
      'edit_form'   => $editForm->createView(),
      'delete_form' => $deleteForm->createView(),
    ));
    }

  /**
   * Deletes a User entity.
   *
   */
  public function deleteAction(Request $request, $id)
    {
    $form = $this->createDeleteForm($id);
    $form->handleRequest($request);

    if ($form->isValid())
      {
      $em     = $this->getDoctrine()->getManager();
      $entity = $em->getRepository('GameUserBundle:User')->find($id);

      if (!$entity)
        {
        throw $this->createNotFoundException('Unable to find User entity.');
        }

      $em->remove($entity);
      $em->flush();
      }

    return $this->redirect($this->generateUrl('user'));
    }

  /**
   * Creates a form to delete a User entity by id.
   *
   * @param mixed $id The entity id
   *
   * @return Form The form
   */
  private function createDeleteForm($id)
    {
    return $this->createFormBuilder()
    ->setAction($this->generateUrl('user_delete', array('id' => $id)))
    ->setMethod('DELETE')
    ->add('submit', 'submit', array('label' => 'Delete'))
    ->getForm()
    ;
    }

  /**
   * Lists all My user entities.
   *
   */
  public function myusersAction()
    {
    $id = $this->getUser()->getId();
    $em = $this->getDoctrine()->getManager();

    $query = $em->getRepository('GameUserBundle:User')->findBy(
    array('parent' => $id)
    );

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
    $query, $this->get('request')->query->get('page', 1), 10
    );

    return $this->render('GameUserBundle:User:myusers.html.twig', array(
      'pagination' => $pagination,
    ));
    }

  /**
   * User reports
   *
   */
//  public function reportsAction(Request $request)
  public function reportsAction()
    {
    $breadcrumbs = $this->get("white_october_breadcrumbs");
    $breadcrumbs->addItem("Home", $this->get("router")->generate("game_holy_time_homepage"));
    $breadcrumbs->addItem("Employees", $this->get("router")->generate("user"));
    $breadcrumbs->addItem("Reports"); 
   
    $form = $this->createForm(new ReportsType(), null , array(
      'action' => $this->generateUrl('user_show_report' ),
      'method' => 'POST',
      'label' => 'Show',
      'block_name' => false,
    ));    

    return $this->render('GameUserBundle:User:reports.html.twig', array
      (
      'form' => $form->createView(),
    ));
    }

 public function getRequestData()
    {
    $block_name = false; 
    
    $request_data = $this->getRequest()->request->all();
    //var_dump($request_data);
    
    $this->employees = $request_data['Report']['employees'];
    $this->reportType = $request_data['Report']['reportType'];
    $this->startDate = $request_data['Report']['startDate'];
    $this->endDate = $request_data['Report']['endDate'];
    
    
    
    if  ( $this->employees <> null || $this->startDate <> '' || $this->endDate <> '' || $this->reportType <> null ) 
      { 
      $block_name = true; 
      }

//  var_dump($this->employees);   
//  var_dump($this->reportType);    
//  var_dump($this->startDate);    
//  var_dump($this->endDate);   
//  var_dump($block_name);   
      
       $date = new DateTime(date('Y').'-01-01 00:00:00');      
       if ($this->employees == null ) { $this->employees = 'all'; }
       if ($this->reportType == null ) { $this->reportType = 'all'; }
       
       if ($this->startDate == null ) 
         { $this->startDate = $date; }
       else
         { $this->startDate = new DateTime($this->startDate); }
         
       if ($this->endDate == null ) 
         { $this->endDate = new DateTime("now"); }  
       else
         { $this->endDate = new DateTime($this->endDate); }      
      
     
  return $block_name;
    }
  
  private function createReportForm($block_name)
    {
    $form = $this->createForm(new ReportsType(), null , array(
      'action' => $this->generateUrl('user_show_report' ),
      'method' => 'POST',
      'label' => 'Show',     
      'block_name' => $block_name,      
    )); 

    return $form;
    }    
    
  private function CheckEmployees($em)
    {
      if ($this->employees == 'all')
        {
        $this->employees_tag = -1;
        }
      else 
        {
        $user = $em->getRepository('GameUserBundle:User')->find($this->employees);
        $this->employees_name = $user->getUsername(); 
        }
    }      
   
  private function CheckAbsenceTypes($em)
    {
      if ($this->reportType == 'all')
        {
        $this->reportType_tag = -1;
        }        
      else 
        {
        $type = $em->getRepository('GameTypingMatchesBundle:AbsenceCategory')->find($this->reportType);
        $this->reportType_name = $type->getName();
        }
    }     
    
  private function InitReportValues()
    {
    $this->employees_tag = 1;
    $this->employees_name = '';
    $this->reportType_tag = 1;
    $this->reportType_name = '';
    }    
    
  /**
   * show report
   *
   */
//  public function reportsAction(Request $request)
public function showreportAction(Request $request)
    {
    $em = $this->getDoctrine()->getManager();   
    
    $breadcrumbs = $this->get("white_october_breadcrumbs");
    $breadcrumbs->addItem("Home", $this->get("router")->generate("game_holy_time_homepage"));
    $breadcrumbs->addItem("Employees", $this->get("router")->generate("user"));
    $breadcrumbs->addItem("Reports"); 
    
    $block_name = $this->getRequestData();

    $this->InitReportValues();
    
    $form = $this->createReportForm($block_name);
    $form->handleRequest($request);
    
    if ($request->isMethod('POST'))
      {
      $this->CheckEmployees($em);
      $this->CheckAbsenceTypes($em);
      
      $entities = $em->getRepository('GameTypingMatchesBundle:AbsenceHour')->getAbsencesReport( $this->employees , $this->reportType , $this->startDate , $this->endDate );

       }

   
    if ($block_name && $form->get('generatePdf')->isClicked())
      {
       $data =array();
     
      $html = $this->render('GameUserBundle:User:showreportresult.html.twig', array
        (
        'form' => $form->createView(),
        'entities' => $entities,
        'employees' => $this->employees,
        'employees_tag' => $this->employees_tag,
        'employees_name' => $this->employees_name,
        'reportType' => $this->reportType,
        'reportType_tag' => $this->reportType_tag,
        'reportType_name' => $this->reportType_name,
        'startDate' => $this->startDate,
        'endDate' => $this->endDate,
      ));      
      
      
      $file_name='reportexport.pdf';
    
    return new Response(
        $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
        200,
        array(
            'Content-Type'          => 'application/pdf',
            'Content-Disposition'   => 'attachment; filename="'.$file_name.'"',
            'charset' => 'UTF-8',
        )
    );      
      }
    else 
      {
      
    return $this->render('GameUserBundle:User:showreport.html.twig', array
      (
      'form' => $form->createView(),
      'entities' => $entities,
      'employees' => $this->employees,
      'employees_tag' => $this->employees_tag,
      'employees_name' => $this->employees_name,
      'reportType' => $this->reportType,
      'reportType_tag' => $this->reportType_tag,
      'reportType_name' => $this->reportType_name,
      'startDate' => $this->startDate,
      'endDate' => $this->endDate,
    ));      

      }  
    }    
    
    
  private function createGenerationForm($block_name)
    {
    $form = $this->createForm(new ReportsType(), null , array(
      'action' => $this->generateUrl('user_generation' ),
      'method' => 'POST',
      'block_name' => $block_name,   
    )); 

    return $form;
    }     
    
    
  /**
   * User reports generation
   *
   */
  public function generationAction(Request $request)
    {
    $data =array();
    
    $form = $this->createGenerationForm(true);
         
    $html = $this->render('GameUserBundle:User:generation.html.twig', array
      (
      'form' => $form->createView(),
      'data' => $data,
    ));
     
    $file_name='reportexport.pdf';
    
    return new Response(
        $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
        200,
        array(
            'Content-Type'          => 'application/pdf',
            'Content-Disposition'   => 'attachment; filename="'.$file_name.'"',
            'charset' => 'UTF-8',
        )
    );            
    }

	/**
	 * Lists all Hours entities.
	 *
	 */
	public function hoursAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();

		$form = $this->createSearchForm();
		$form->handleRequest($request);

    $query = $em->getRepository('GameTypingMatchesBundle:Hour')->getAllQuery($request->get('search_hours', array()));

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
        $query,
        $this->get('request')->query->get('page', 1),
        25
    );

            $breadcrumbs = $this->get("white_october_breadcrumbs");
            $breadcrumbs->addItem("Home", $this->get("router")->generate("game_holy_time_homepage"));
            $breadcrumbs->addItem("Employees", $this->get("router")->generate("hour"));
            $breadcrumbs->addItem("Approve working time");

        return $this->render('GameUserBundle:User:hours.html.twig', array(
            'pagination' => $pagination,
          'form'       => $form->createView(),
        ));
    } 
    
    
	protected function createSearchForm()
	{
		$form = $this->createForm(new AcceptHoursForAllEmployeesFilterType(), null, array(
				'action' => $this->generateUrl('user_hours'),
				'method' => 'GET',
				'em'     => $this->getDoctrine()->getManager(),
				'user'   => $this->getUser()
			));

		$form->add('submit', 'submit', array('label' => 'Filter'));

		return $form;
	}    
   
  
    /**
     * Creates a form to create a AbsenceHour entity.
     */
    private function createAbsenceForm(AbsenceHour $entity)
    {
        $form = $this->createForm(new UserAbsenceType(), $entity, array(
            'action' => $this->generateUrl('user_absence_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'send'));

        return $form;
    }

    /**
     * Displays a form to create a new AbsenceHour entity.
     *
     * @Route("/new", name="user_absence")
     * @Method("GET")
     * @Template()
     */
    public function absenceAction()
    {
        $entity = new AbsenceHour();
        $form   = $this->createAbsenceForm($entity);

        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Home", $this->get("router")->generate("game_holy_time_homepage"));
        $breadcrumbs->addItem("Employees", $this->get("router")->generate("absencehour"));
        $breadcrumbs->addItem("Enter the absence");
        
        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }  
    
    /**
     * Displays a form to create a new AbsenceHour entity.
     *
     * @Route("/new", name="user_absence")
     * @Method("GET")
     * @Template()
     */
    public function absenceCreateAction(Request $request)
    {
        $entity = new AbsenceHour();
        $form = $this->createAbsenceForm($entity);
        $form->handleRequest($request);
        $data = $form->get('user')->getData();

        if ($form->isValid()) {
            
            $em = $this->getDoctrine()->getManager();
            
            $entity->setUser($data);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('user_absence', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }  
  
  
  }
