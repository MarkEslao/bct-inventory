<?php

/**
 * Inventoryingri form.
 *
 * @package    kres
 * @subpackage form
 * @author     Your name here
 */
class InventoryingriForm extends BaseInventoryingriForm
{
  public function configure()
  {
             $this->widgetSchema['uom'] = new sfWidgetFormChoice(array(
             'label' => 'UOM',
             'choices'  => InventoryingriPeer::$ingri));
             
             $this->widgetSchema['pouom'] = new sfWidgetFormChoice(array(
             'choices'  => InventoryingriPeer::$ingri));
             
             $this->widgetSchema['category'] = new sfWidgetFormPropelChoice(array('model' => 'Mealcategory', 'add_empty' => true,'order_by' => array('Name', 'asc')));
             
             
             $this->widgetSchema['file']        = new sfWidgetFormInputFile();
             
$this->setValidators(array(
      'name'    => new sfValidatorString(array('required' => true), array('required'   => 'The Name is Required')),
      'barcode'    => new sfValidatorString(array('required' => true)),
      'prop'    => new sfValidatorString(array('required' => false)),
      'qty'    => new sfValidatorString(array('required' => false), array('required'   => 'The Quantity is Required')),
      'category'    => new sfValidatorString(array('required' => false)),
      'type'    => new sfValidatorString(array('required' => false)),
	  'reorder'    => new sfValidatorString(array('required' => false)),
	  'wolqty'    => new sfValidatorString(array('required' => false)),
	  'pouom'    => new sfValidatorString(array('required' => true), array('required'   => 'The Purchase UOM is Required','invalid' => 'Please Enter a number on Standard UOM')),
	  'uom'    => new sfValidatorString(array('required' => true), array('required'   => 'The Standard UOM is Required','invalid' => 'Please Enter a number on Standard UOM')),
      'price'   => new sfValidatorNumber(array('required' => false), array('required'   => 'The Price is Required','invalid' => 'Please Enter a number on Price')),
      'selprice'   => new sfValidatorNumber(array('required' => false), array('required'   => 'The Selling Price is Required','invalid' => 'Please Enter a number on Price')),
      'wolprice'   => new sfValidatorNumber(array('required' => false), array('required'   => 'The Selling Price is Required','invalid' => 'Please Enter a number on Price')),
	  'vatin'   => new sfValidatorNumber(array('required' => false), array('required'   => 'The Vat 12 is Required','invalid' => 'Please Enter a number on Price')),
      'vatex'   => new sfValidatorNumber(array('required' => false), array('required'   => 'The Vat Exclusive is Required','invalid' => 'Please Enter a number on Price')),
	  'vatin1'   => new sfValidatorNumber(array('required' => false), array('required'   => 'The Vat 12 is Required','invalid' => 'Please Enter a number on Price')),
      'vatex1'   => new sfValidatorNumber(array('required' => false), array('required'   => 'The Vat Exclusive is Required','invalid' => 'Please Enter a number on Price')),
	  'con1'   => new sfValidatorNumber(array('required' => true), array('required'   => 'The Standard UOM is Required','invalid' => 'Please Enter a number on Standard UOM')),
      'con2'   => new sfValidatorNumber(array('required' => true), array('required'   => 'The Purchase UOM is Required','invalid' => 'Please Enter a number on Purchase UOM')),
      'mealcategory'    => new sfValidatorString(array('required' => false)),
      'file'    => new sfValidatorFile(array('path' => sfConfig::get('sf_upload_dir').'/inventoryingri', 'required' => false)),
      'senior'    => new sfValidatorString(array('required' => false)),
      'active'    => new sfValidatorString(array('required' => false)),
	  'addons'    => new sfValidatorString(array('required' => false)),
      'nonstock'    => new sfValidatorString(array('required' => false)),
      'id'    => new sfValidatorString(array('required' => false)),
      'warehouse'    => new sfValidatorString(array('required' => false)),

    ));        
    
    $this->validatorSchema->setPostValidator( 
      new sfValidatorPropelUnique(array('model' => 'Inventoryingri', 'column' => array('barcode')), array('invalid'   => 'The Barcode is already Exist')) 
    );         
             
             
    
  }
}
