<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Discountlist filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseDiscountlistFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'   => new sfWidgetFormFilterInput(),
      'amount' => new sfWidgetFormFilterInput(),
      'status' => new sfWidgetFormFilterInput(),
      'type'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'   => new sfValidatorPass(array('required' => false)),
      'amount' => new sfValidatorPass(array('required' => false)),
      'status' => new sfValidatorPass(array('required' => false)),
      'type'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('discountlist_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Discountlist';
  }

  public function getFields()
  {
    return array(
      'id'     => 'Number',
      'name'   => 'Text',
      'amount' => 'Text',
      'status' => 'Text',
      'type'   => 'Text',
    );
  }
}
