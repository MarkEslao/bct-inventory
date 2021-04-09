<?php

/**
 * Configuration form base class.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class BaseConfigurationForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'name'         => new sfWidgetFormInput(),
      'branch'       => new sfWidgetFormInput(),
      'content'      => new sfWidgetFormInput(),
      'footer'       => new sfWidgetFormInput(),
      'file'         => new sfWidgetFormInput(),
      'alliance'     => new sfWidgetFormInput(),
      'giftcert'     => new sfWidgetFormInput(),
      'scdiscount'   => new sfWidgetFormInput(),
      'itemdiscount' => new sfWidgetFormInput(),
      'discount'     => new sfWidgetFormInput(),
      'demo'         => new sfWidgetFormInput(),
      'points'       => new sfWidgetFormInput(),
      'transdate'    => new sfWidgetFormDate(),
      'transon'      => new sfWidgetFormInput(),
      'assistant'    => new sfWidgetFormInput(),
      'weighting'    => new sfWidgetFormInput(),
      'joborder'     => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorPropelChoice(array('model' => 'Configuration', 'column' => 'id', 'required' => false)),
      'name'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'branch'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'content'      => new sfValidatorString(array('max_length' => 10000, 'required' => false)),
      'footer'       => new sfValidatorString(array('max_length' => 10000, 'required' => false)),
      'file'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'alliance'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'giftcert'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'scdiscount'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'itemdiscount' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'discount'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'demo'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'points'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'transdate'    => new sfValidatorDate(array('required' => false)),
      'transon'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'assistant'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'weighting'    => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'joborder'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('configuration[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Configuration';
  }


}
