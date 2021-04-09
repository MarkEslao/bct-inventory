<?php

/**
 * Vendor form.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class VendorForm extends BaseVendorForm
{
  public function configure()
  {
	  $this->widgetSchema['file']        = new sfWidgetFormInputFile();
	  
	  $this->setValidators(array(
      'name'    => new sfValidatorString(array('required' => true), array('required'   => 'The Name is Required')),
      'address'    => new sfValidatorString(array('required' => false)),
      'contactname'    => new sfValidatorString(array('required' => false)),
      'contactphone'    => new sfValidatorString(array('required' => false), array('required'   => 'The Quantity is Required')),
      'fax'    => new sfValidatorString(array('required' => false)),
      'email'    => new sfValidatorString(array('required' => false)),
      'remarks'    => new sfValidatorString(array('required' => false)),
      'charge'    => new sfValidatorString(array('required' => false)),
      'other'    => new sfValidatorString(array('required' => false)),
      'tin'   => new sfValidatorString(array('required' => false), array('required'   => 'The Description is Required')),
      'file'    => new sfValidatorFile(array('path' => sfConfig::get('sf_upload_dir').'/vendor', 'required' => false)),
      'id'    => new sfValidatorString(array('required' => false)),

    ));   
  }
}
