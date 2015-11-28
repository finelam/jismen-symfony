<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\TVA;
use AppBundle\Form\TVAType;

/**
 * TVA controller.
 *
 */
class TVAController extends Controller
{

    /**
     * Lists all TVA entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:TVA')->findAll();

        return $this->render('AppBundle:TVA:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TVA entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TVA();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirectToRoute('tva_show', array('id' => $entity->getId()));
        }

        return $this->render('AppBundle:TVA:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TVA entity.
     *
     * @param TVA $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TVA $entity)
    {
        $form = $this->createForm(new TVAType(), $entity, array(
            'action' => $this->generateUrl('tva_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }

    /**
     * Displays a form to create a new TVA entity.
     *
     */
    public function newAction()
    {
        $entity = new TVA();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:TVA:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TVA entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:TVA')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TVA entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:TVA:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TVA entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:TVA')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TVA entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:TVA:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TVA entity.
    *
    * @param TVA $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TVA $entity)
    {
        $form = $this->createForm(new TVAType(), $entity, array(
            'action' => $this->generateUrl('tva_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
    /**
     * Edits an existing TVA entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:TVA')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TVA entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirectToRoute('tva_show', array('id' => $entity->getId()));
        }

        return $this->render('AppBundle:TVA:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TVA entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:TVA')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TVA entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirectToRoute('tva');
    }

    /**
     * Creates a form to delete a TVA entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tva_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm()
        ;
    }
}
