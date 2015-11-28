<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Command;
use AppBundle\Form\CommandType;

/**
 * Command controller.
 *
 */
class CommandController extends Controller
{

    /**
     * Lists all Command entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Command')->findAll();

        return $this->render('AppBundle:Command:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Command entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Command();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirectToRoute('command_show', array('id' => $entity->getId()));
        }

        return $this->render('AppBundle:Command:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Command entity.
     *
     * @param Command $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Command $entity)
    {
        $form = $this->createForm(new CommandType(), $entity, array(
            'action' => $this->generateUrl('command_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }

    /**
     * Displays a form to create a new Command entity.
     *
     */
    public function newAction()
    {
        $entity = new Command();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:Command:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Command entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Command')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Command entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Command:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Command entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Command')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Command entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Command:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Command entity.
    *
    * @param Command $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Command $entity)
    {
        $form = $this->createForm(new CommandType(), $entity, array(
            'action' => $this->generateUrl('command_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
    /**
     * Edits an existing Command entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Command')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Command entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirectToRoute('command_show', array('id' => $entity->getId()));
        }

        return $this->render('AppBundle:Command:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Command entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Command')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Command entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirectToRoute('command');
    }

    /**
     * Creates a form to delete a Command entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('command_delete', array('id' => $entity->getId())))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm()
        ;
    }
}
