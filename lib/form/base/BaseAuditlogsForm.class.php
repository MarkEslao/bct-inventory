<?php

/**
 * Auditlogs form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseAuditlogsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'user'       => new sfWidgetFormInput(),
      'receipt'    => new sfWidgetFormInput(),
      'tran'       => new sfWidgetFormInput(),
      'date'       => new sfWidgetFormDate(),
      'machine'    => new sfWidgetFormInput(),
      'ipaddress'  => new sfWidgetFormInput(),
      'type'       => new sfWidgetFormInput(),
      'updated_at' => new sfWidgetFormDateTime(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Auditlogs', 'column' => 'id', 'required' => false)),
      'user'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'receipt'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tran'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'date'       => new sfValidatorDate(array('required' => false)),
      'machine'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'ipaddress'  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'type'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('auditlogs[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Auditlogs';
  }


}
