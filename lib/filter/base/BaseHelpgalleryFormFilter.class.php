<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Helpgallery filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseHelpgalleryFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'help' => new sfWidgetFormFilterInput(),
      'file' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'help' => new sfValidatorPass(array('required' => false)),
      'file' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('helpgallery_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Helpgallery';
  }

  public function getFields()
  {
    return array(
      'id'   => 'Number',
      'help' => 'Text',
      'file' => 'Text',
    );
  }
}
