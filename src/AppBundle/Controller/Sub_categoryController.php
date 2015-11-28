<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use AppBundle\Entity\Sub_category;
use AppBundle\Form\Sub_categoryType;

/**
 * Sub_category controller.
 *
 */
class Sub_categoryController extends Controller
{

    /**
     * Lists all Sub_category entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Sub_category')->findAll();

        return $this->render('AppBundle:Sub_category:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Sub_category entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Sub_category();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirectToRoute('sub_category_show', array('id' => $entity->getId()));
        }

        return $this->render('AppBundle:Sub_category:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Sub_category entity.
     *
     * @param Sub_category $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Sub_category $entity)
    {
        $form = $this->createForm(new Sub_categoryType(), $entity, array(
            'action' => $this->generateUrl('sub_category_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Créer'));

        return $form;
    }

    /**
     * Displays a form to create a new Sub_category entity.
     *
     */
    public function newAction()
    {
        $entity = new Sub_category();
        $form   = $this->createCreateForm($entity);

        return $this->render('AppBundle:Sub_category:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Sub_category entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Sub_category')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sub_category entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Sub_category:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Sub_category entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Sub_category')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sub_category entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AppBundle:Sub_category:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Sub_category entity.
    *
    * @param Sub_category $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Sub_category $entity)
    {
        $form = $this->createForm(new Sub_categoryType(), $entity, array(
            'action' => $this->generateUrl('sub_category_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
    /**
     * Edits an existing Sub_category entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Sub_category')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Sub_category entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirectToRoute('sub_category_show', array('id' => $entity->getId()));
        }

        return $this->render('AppBundle:Sub_category:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Sub_category entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Sub_category')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Sub_category entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirectToRoute('sub_category');
    }

    /**
     * Creates a form to delete a Sub_category entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('sub_category_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm()
        ;
    }
}
