<?php

namespace Drupal\Libros\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Formulario que permite el alta de libors al sistema.
 *
 */
class LibrosNewForm extends FormBase {
    /**
    * {@inheritdoc}
    */
    protected function getEditableConfigNames() {
        return ['libros.new_form'];
    }
    /**
    * {@inheritdoc}
    */
    public function getFormId() {
        return 'libros_new_form';
    }
    /**
   * {@inheritdoc}
   */
    public function buildForm(array $form, FormStateInterface $form_state) {
        $form['titulo'] = array(
            '#type' => 'textfield',
            '#title' => t('Titulo del Libro:'),
            '#required' => TRUE,
        );
        $form['isbn'] = array(
            '#type' => 'textfield',
            '#title' => t('ISBN del Libro:'),
            '#required' => TRUE,
        );
        
        $form['actions']['#type'] = 'actions';
        $form['actions']['submit'] = array(
            '#type' => 'submit',
            '#value' => $this->t('Guardar'),
            '#button_type' => 'primary',
        );
        return $form;
    }
    /**
    * {@inheritdoc}
    */
    public function validateForm(array &$form, FormStateInterface $form_state) {
      if (($form_state->getValue('isbn') < 5) OR ($form_state->getValue('isbn') > 20) ){
        $form_state->setErrorByName('isbn', $this->t('Codigo ISBN incorrecto, verifique.'));
      }
    }
    /**
    * {@inheritdoc}
    */
    public function submitForm(array &$form, FormStateInterface $form_state) {
        
        $values = array(
            'titulo' => $form_state->getValue('titulo'),
            'isbn' => $form_state->getValue('isbn')	
	    );
	    $insert = db_insert('io_libro')->fields(array(
			'titulo' => $values['titulo'],
			'isbn' => $values['isbn'],
		))->execute();
	
        drupal_set_message(t('El Libro fue guardado con exito !'));
        foreach ($form_state->getValues() as $key => $value) {
            drupal_set_message($key . ': ' . $value);
        }
    }
}