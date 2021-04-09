<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Senior filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseSeniorFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'senior'     => new sfWidgetFormFilterInput(),
      'status'     => new sfWidgetFormFilterInput(),
      'table'      => new sfWidgetFormFilterInput(),
      'take'       => new sfWidgetFormFilterInput(),
      'card'       => new sfWidgetFormFilterInput(),
      'discount'   => new sfWidgetFormFilterInput(),
      'receipt'    => new sfWidgetFormFilterInput(),
      'customer'   => new sfWidgetFormFilterInput(),
      'giftcert'   => new sfWidgetFormFilterInput(),
      'updated_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'senior'     => new sfValidatorPass(array('required' => false)),
      'status'     => new sfValidatorPass(array('required' => false)),
      'table'      => new sfValidatorPass(array('required' => false)),
      'take'       => new sfValidatorPass(array('required' => false)),
      'card'       => new sfValidatorPass(array('required' => false)),
      'discount'   => new sfValidatorPass(array('required' => false)),
      'receipt'    => new sfValidatorPass(array('required' => false)),
      'customer'   => new sfValidatorPass(array('required' => false)),
      'giftcert'   => new sfValidatorPass(array('required' => false)),
      'updated_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('senior_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Senior';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'senior'     => 'Text',
      'status'     => 'Text',
      'table'      => 'Text',
      'take'       => 'Text',
      'card'       => 'Text',
      'discount'   => 'Text',
      'receipt'    => 'Text',
      'customer'   => 'Text',
      'giftcert'   => 'Text',
      'updated_at' => 'Date',
      'created_at' => 'Date',
    );
  }
}
