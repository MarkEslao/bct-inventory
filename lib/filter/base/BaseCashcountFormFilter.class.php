<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Cashcount filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseCashcountFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'date'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'oneth'       => new sfWidgetFormFilterInput(),
      'fiveh'       => new sfWidgetFormFilterInput(),
      'twoh'        => new sfWidgetFormFilterInput(),
      'oneh'        => new sfWidgetFormFilterInput(),
      'fifty'       => new sfWidgetFormFilterInput(),
      'twenty'      => new sfWidgetFormFilterInput(),
      'ten'         => new sfWidgetFormFilterInput(),
      'five'        => new sfWidgetFormFilterInput(),
      'one'         => new sfWidgetFormFilterInput(),
      'fiftyc'      => new sfWidgetFormFilterInput(),
      'twentyfivec' => new sfWidgetFormFilterInput(),
      'tenc'        => new sfWidgetFormFilterInput(),
      'fivec'       => new sfWidgetFormFilterInput(),
      'amount'      => new sfWidgetFormFilterInput(),
      'total'       => new sfWidgetFormFilterInput(),
      'over'        => new sfWidgetFormFilterInput(),
      'short'       => new sfWidgetFormFilterInput(),
      'terminal'    => new sfWidgetFormFilterInput(),
      'cashier'     => new sfWidgetFormFilterInput(),
      'type'        => new sfWidgetFormFilterInput(),
      'remarks'     => new sfWidgetFormFilterInput(),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'date'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'oneth'       => new sfValidatorPass(array('required' => false)),
      'fiveh'       => new sfValidatorPass(array('required' => false)),
      'twoh'        => new sfValidatorPass(array('required' => false)),
      'oneh'        => new sfValidatorPass(array('required' => false)),
      'fifty'       => new sfValidatorPass(array('required' => false)),
      'twenty'      => new sfValidatorPass(array('required' => false)),
      'ten'         => new sfValidatorPass(array('required' => false)),
      'five'        => new sfValidatorPass(array('required' => false)),
      'one'         => new sfValidatorPass(array('required' => false)),
      'fiftyc'      => new sfValidatorPass(array('required' => false)),
      'twentyfivec' => new sfValidatorPass(array('required' => false)),
      'tenc'        => new sfValidatorPass(array('required' => false)),
      'fivec'       => new sfValidatorPass(array('required' => false)),
      'amount'      => new sfValidatorPass(array('required' => false)),
      'total'       => new sfValidatorPass(array('required' => false)),
      'over'        => new sfValidatorPass(array('required' => false)),
      'short'       => new sfValidatorPass(array('required' => false)),
      'terminal'    => new sfValidatorPass(array('required' => false)),
      'cashier'     => new sfValidatorPass(array('required' => false)),
      'type'        => new sfValidatorPass(array('required' => false)),
      'remarks'     => new sfValidatorPass(array('required' => false)),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('cashcount_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Cashcount';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'date'        => 'Date',
      'oneth'       => 'Text',
      'fiveh'       => 'Text',
      'twoh'        => 'Text',
      'oneh'        => 'Text',
      'fifty'       => 'Text',
      'twenty'      => 'Text',
      'ten'         => 'Text',
      'five'        => 'Text',
      'one'         => 'Text',
      'fiftyc'      => 'Text',
      'twentyfivec' => 'Text',
      'tenc'        => 'Text',
      'fivec'       => 'Text',
      'amount'      => 'Text',
      'total'       => 'Text',
      'over'        => 'Text',
      'short'       => 'Text',
      'terminal'    => 'Text',
      'cashier'     => 'Text',
      'type'        => 'Text',
      'remarks'     => 'Text',
      'updated_at'  => 'Date',
      'created_at'  => 'Date',
    );
  }
}
