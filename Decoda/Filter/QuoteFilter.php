<?php

namespace FM\BbCodeBundle\Decoda\Filter;

class QuoteFilter extends \DecodaFilter {

	/**
	 * Supported tags.
	 * 
	 * @access protected
	 * @var array
	 */
	protected $_tags = array(
		'quote' => array(
			'template' => 'quote',
			'type' => self::TYPE_BLOCK,
            'lineBreaks' => false,
			'allowed' => self::TYPE_BOTH,
			'attributes' => array(
				'default' => '/.*?/',
				'date' => '/.*?/'
			),
			'map' => array(
				'default' => 'author'
			),
			'maxChildDepth' => 2
		)
	);

}