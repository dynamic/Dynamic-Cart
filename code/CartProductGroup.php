<?php

class CartProductGroup extends Page {
	
	public static $many_many = array(
		'FeaturedProducts' => 'CartProduct'
	);
	
	public static $singular_name = 'Product Category';
	public static $plural_name = 'Product Categories';
	public static $default_sort = 'Title';
	
	static $description = 'Product Category Group';
	
	public function getCMSFields() {
		$fields = parent::getCMSFields();
		
		// Featured Products
		$featuredMap = CartProduct::get()->map('ID', 'Breadcrumbs')->toArray();
		asort($featuredMap);
		$fields->addFieldToTab('Root.Featured',
			ListboxField::create('FeaturedProducts', singleton('CartProduct')->i18n_plural_name())
				->setMultiple(true)
				->setSource($featuredMap)
				->setAttribute(
					'data-placeholder', 
					'add Featured Product'
				)
		);
		
		return $fields;
	}
	
	/**
	 * loadDescendantProductGroupIDListInto function.
	 * 
	 * @access public
	 * @param mixed &$idList
	 * @return void
	 */
	public function loadDescendantProductGroupIDListInto(&$idList) {
		if ($children = $this->AllChildren()) {
			foreach($children as $child) {
				if(in_array($child->ID, $idList)) continue;
				
				if($child instanceof CartProductGroup) {
					$idList[] = $child->ID; 
					$child->loadDescendantProductGroupIDListInto($idList);
				}                             
			}
		}
	}
	
	
	/**
	 * ProductGroupIDs function.
	 * 
	 * @access public
	 * @return void
	 */
	public function ProductGroupIDs() {
		$holderIDs = array();
		$this->loadDescendantProductGroupIDListInto($holderIDs);
		return $holderIDs;
	}
	
	
	/**
	 * Products function.
	 * 
	 * @access public
	 * @return void
	 */
	public function Products() {
	
		$filter = '"ParentID" = ' . $this->ID;
		$limit = 3;
		
		// Build a list of all IDs for ProductGroups that are children
		$holderIDs = $this->ProductGroupIDs();
		
		// If no BlogHolders, no BlogEntries. So return false
		if($holderIDs) {
			// Otherwise, do the actual query
			if($filter) $filter .= ' OR ';
			$filter .= '"ParentID" IN (' . implode(',', $holderIDs) . ")";
		}
		
		$order = '"SiteTree"."Title" ASC';

		$entries = CartProduct::get()->where($filter)->sort($order);

    	$list = new PaginatedList($entries, Controller::curr()->request);
    	$list->setPageLength($limit);
    	return $list;
		
	}
	
	
	/**
	 * Categories function.
	 * 
	 * @access public
	 * @return void
	 */
	public function Categories() {
		$children = CartProductGroup::get()->sort('Title')->filter(array('ParentID' => $this->ID));		
		$siblings = CartProductGroup::get()->sort('Title')->filter(array('ParentID' => $this->ParentID));
		
		if ($children->Count() > 0) {
			return $children;
		}
		if ($siblings->Count() > 0) {
			return $siblings;
		} 
		
		return false;
		
	}
	
}

class CartProductGroup_Controller extends Page_Controller {
	
	public function init() {
		parent::init();
		Requirements::css('cart/css/cart.css');
	}
	
}