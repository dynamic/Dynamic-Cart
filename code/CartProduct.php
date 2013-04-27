<?php

class CartProduct extends Page {
	
	public static $db = array(
		'Price' => 'Currency',
		'Weight' => 'Decimal',
		'ProductCode' => 'Varchar(100)'
	);
	
	public static $has_one = array(
		'Image' => 'Image'
	);
	
	public static $belongs_many_many = array(
		'Categories' => 'CartProductGroup'
	);
	
	public static $singular_name = 'Product';
	public static $plural_name = 'Products';
	
	static $description = 'Product available for purchase';
	
	public static $summary_fields = array(
		'Title',
		'ProductCode',
		'Price'
	);
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		
		$fields->addFieldsToTab('Root.Product', array(
			new CurrencyField('Price'),
			new NumericField('Weight'),
			new TextField('ProductCode', 'Product Code')
		));
		
		// Main Image
		$fields->insertBefore(new Tab('Images'), 'Preview');
		$ImageField = new UploadField('Image', 'Main Image');
		$ImageField->getValidator()->allowedExtensions = array('jpg', 'gif', 'png');
		$ImageField->setFolderName('Uploads/Products');
		$fields->addFieldToTab('Root.Images', $ImageField);
		
		return $fields;
	}
	
	public function getShoppingCart() {
		return class_exists('MiniCart');
	}
	
}

class CartProduct_Controller extends Page_Controller {
	
	public function init() {
		parent::init();
		Requirements::css('cart/css/cart.css');
	}
	
}