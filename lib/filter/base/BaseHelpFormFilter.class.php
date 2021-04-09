<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Help filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseHelpFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'  => new sfWidgetFormFilterInput(),
      'short' => new sfWidgetFormFilterInput(),
      'desc'  => new sfWidgetFormFilterInput(),
      'file'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'  => new sfValidatorPass(array('required' => false)),
      'short' => new sfValidatorPass(array('required' => false)),
      'desc'  => new sfValidatorPass(array('required' => false)),
      'file'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('help_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Help';
  }

  public function getFields()
  {
    return array(
      'id'    => 'Number',
      'name'  => 'Text',
      'short' => 'Text',
      'desc'  => 'Text',
      'file'  => 'Text',
    );
  }
}
