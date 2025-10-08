<?php
// This file is generated. Do not modify it manually.
return array(
	'card' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'hasantech-gb-blocks/card1',
		'title' => 'Card 1',
		'category' => 'text',
		'icon' => 'email',
		'description' => 'A customizable card block.',
		'keywords' => array(
			'title',
			'text',
			'gb',
			'card',
			'card 1'
		),
		'textdomain' => 'hasantech-gb-blocks',
		'attributes' => array(
			'title' => array(
				'type' => 'string',
				'default' => 'Card title'
			),
			'paragraph' => array(
				'type' => 'string',
				'default' => 'This is a paragraph'
			),
			'image' => array(
				'type' => 'string',
				'default' => 'https://cdn.pixabay.com/photo/2025/09/24/17/10/squirrel-9853377_960_720.jpg'
			),
			'buttonText' => array(
				'type' => 'string',
				'default' => 'Click me'
			),
			'buttonLink' => array(
				'type' => 'string',
				'default' => ''
			),
			'cardBackground' => array(
				'type' => 'string',
				'default' => '#fff'
			),
			'cardTextColor' => array(
				'type' => 'string',
				'default' => '#000'
			),
			'borderRadius' => array(
				'type' => 'string',
				'default' => '0'
			),
			'boxShadow' => array(
				'type' => 'string',
				'default' => ''
			),
			'boxShadowOnHover' => array(
				'type' => 'string',
				'default' => ''
			),
			'authorName' => array(
				'type' => 'string',
				'default' => 'Hasan'
			),
			'authorImage' => array(
				'type' => 'string',
				'default' => ''
			),
			'authorLink' => array(
				'type' => 'string',
				'default' => ''
			),
			'date' => array(
				'type' => 'string',
				'default' => ''
			),
			'titleAlign' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'paragraphAlign' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'buttonAlign' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'align' => array(
				'type' => 'string',
				'default' => 'left'
			)
		),
		'supports' => array(
			'align' => array(
				'left',
				'center',
				'right'
			)
		),
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css'
	),
	'heading' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gb-static/heading',
		'title' => 'GB static Heading',
		'category' => 'text',
		'icon' => 'editor-textcolor',
		'description' => 'A customizable heading block.',
		'keywords' => array(
			'heading',
			'title',
			'text',
			'gb'
		),
		'textdomain' => 'gb-up',
		'attributes' => array(
			'content' => array(
				'type' => 'string',
				'default' => 'Gb Up Heading'
			),
			'level' => array(
				'type' => 'number',
				'default' => 2
			),
			'align' => array(
				'type' => 'string',
				'default' => 'left'
			),
			'color' => array(
				'type' => 'string',
				'default' => '#444'
			)
		),
		'supports' => array(
			'align' => array(
				'left',
				'center',
				'right'
			)
		),
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	),
	'lastest-post-1' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'hasantech-gb-blocks/latest-post-1',
		'title' => 'Latest Posts 1',
		'category' => 'text',
		'icon' => 'welcome-widgets-menus',
		'description' => 'A customizable card block.',
		'keywords' => array(
			'title',
			'text',
			'gb',
			'post',
			'latest posts 1'
		),
		'textdomain' => 'hasantech-gb-blocks',
		'attributes' => array(
			'postType' => array(
				'type' => 'string',
				'default' => 'post'
			),
			'postPerPage' => array(
				'type' => 'number',
				'default' => 5
			),
			'showFeaturedImage' => array(
				'type' => 'boolean',
				'default' => true
			),
			'displayExcerpt' => array(
				'type' => 'boolean',
				'default' => false
			)
		),
		'supports' => array(
			'html' => false,
			'align' => array(
				'left',
				'center',
				'right'
			)
		),
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'render' => 'file:./render.php'
	)
);
