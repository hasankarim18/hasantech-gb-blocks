<?php
// This file is generated. Do not modify it manually.
return array(
	'card' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'gb-up/card',
		'title' => 'GB up card',
		'category' => 'text',
		'icon' => 'email',
		'description' => 'A customizable card block.',
		'keywords' => array(
			'card',
			'title',
			'text',
			'gb'
		),
		'textdomain' => 'gb-up',
		'attributes' => array(
			'content' => array(
				'type' => 'string',
				'default' => 'Gb up card'
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
	)
);
