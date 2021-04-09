<?php

/**
 * Itemlogs form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseItemlogsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'ingredients' => new sfWidgetFormInput(),
      'name'        => new sfWidgetFormInput(),
      'begin'       => new sfWidgetFormInput(),
      'adjust'      => new sfWidgetFormInput(),
      'endin'       => new sfWidgetFormInput(),
      'uom'         => new sfWidgetFormInput(),
      'remarks'     => new sfWidgetFormInput(),
      'user'        => new sfWidgetFormInput(),
      'branch'      => new sfWidgetFormInput(),
      'type'        => new sfWidgetFormInput(),
      'date'        => new sfWidgetFormInput(),
      'updated_at'  => new sfWidgetFormDateTime(),
      'created_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Itemlogs', 'column' => 'id', 'required' => false)),
      'ingredients' => new sfValidatorString(array('max_length' => 255)),
      'name'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'begin'       => new sfValidatorNumber(array('required' => false)),
      'adjust'      => new sfValidatorNumber(array('required' => false)),
      'endin'       => new sfValidatorNumber(array('required' => false)),
      'uom'         => new sfValidatorNumber(array('required' => false)),
      'remarks'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'user'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'branch'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('itemlogs[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Itemlogs';
  }


}
