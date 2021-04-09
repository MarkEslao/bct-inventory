<?php

/**
 * Helpgallery form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseHelpgalleryForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'   => new sfWidgetFormInputHidden(),
      'help' => new sfWidgetFormInput(),
      'file' => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'   => new sfValidatorPropelChoice(array('model' => 'Helpgallery', 'column' => 'id', 'required' => false)),
      'help' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'file' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('helpgallery[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Helpgallery';
  }


}
