<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Receive filter form base class.
 *
 * @package    kres
 * @subpackage filter
 * @author     Your name here
 */
class BaseReceiveFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'branch'         => new sfWidgetFormPropelChoice(array('model' => 'Location', 'add_empty' => true)),
      'number'         => new sfWidgetFormFilterInput(),
      'deliveredby'    => new sfWidgetFormFilterInput(),
      'notedby'        => new sfWidgetFormFilterInput(),
      'date'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'status'         => new sfWidgetFormFilterInput(),
      'remarks'        => new sfWidgetFormFilterInput(),
      'remarksreceive' => new sfWidgetFormFilterInput(),
      'user'           => new sfWidgetFormFilterInput(),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'branch'         => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Location', 'column' => 'id')),
      'number'         => new sfValidatorPass(array('required' => false)),
      'deliveredby'    => new sfValidatorPass(array('required' => false)),
      'notedby'        => new sfValidatorPass(array('required' => false)),
      'date'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'status'         => new sfValidatorPass(array('required' => false)),
      'remarks'        => new sfValidatorPass(array('required' => false)),
      'remarksreceive' => new sfValidatorPass(array('required' => false)),
      'user'           => new sfValidatorPass(array('required' => false)),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('receive_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Receive';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'branch'         => 'ForeignKey',
      'number'         => 'Text',
      'deliveredby'    => 'Text',
      'notedby'        => 'Text',
      'date'           => 'Date',
      'status'         => 'Text',
      'remarks'        => 'Text',
      'remarksreceive' => 'Text',
      'user'           => 'Text',
      'updated_at'     => 'Date',
      'created_at'     => 'Date',
    );
  }
}
