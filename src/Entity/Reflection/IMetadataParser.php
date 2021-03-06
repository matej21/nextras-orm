<?php declare(strict_types=1);

/**
 * This file is part of the Nextras\Orm library.
 * @license    MIT
 * @link       https://github.com/nextras/orm
 */

namespace Nextras\Orm\Entity\Reflection;


interface IMetadataParser
{
	/**
	 * Parses metadata for entity.
	 * @param  array|null $fileDependencies
	 */
	public function parseMetadata(string $entityClass, & $fileDependencies): EntityMetadata;
}
