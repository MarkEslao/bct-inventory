<?php

class sfWidgetFormInputDateTag extends sfWidgetForm
{
  /**
   * @param array $options     An array of options
   * @param array $attributes  An array of default HTML attributes
   *
   * @see sfWidgetForm
   */
   
  protected function configure($options = array(), $attributes = array())
  {
    $this->setAttribute('rich', 'true');
    $this->setAttribute('size', '10');
  }

  /**
   * @param  string $name        The element name
   * @param  string $value       The date displayed in this widget
   * @param  array  $attributes  An array of HTML attributes to be merged with the default HTML attributes
   * @param  array  $errors      An array of errors for the field
   *
   * @return string An HTML tag string
   *
   * @see sfWidgetForm
   */
  public function render($name, $value = null, $attributes = array(), $errors = array())
  {
    return input_date_tag($name, $value, $this->attributesToHtml($attributes));
  }
}
