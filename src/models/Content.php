<?php
namespace Blocks;

/**
 *
 */
class Content extends BaseModel
{
	protected $tableName = 'content';

	protected $attributes = array(
		'language_code' => AttributeType::LanguageCode
	);
}
