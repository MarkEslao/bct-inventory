<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Giftcert filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseGiftcertFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'senior'   => new sfWidgetFormFilterInput(),
      'giftcert' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'senior'   => new sfValidatorPass(array('required' => false)),
      'giftcert' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('giftcert_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Giftcert';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'senior'   => 'Text',
      'giftcert' => 'Text',
    );
  }
}
