<?php
/**
 * @licence GNU GPL v2+
 * @author H. Snater < mediawiki@snater.com >
 *
 * @codeCoverageIgnoreStart
 */
return call_user_func( function() {

	preg_match(
		'+^(.*?)' . preg_quote( DIRECTORY_SEPARATOR ) . '(vendor|extensions)' .
			preg_quote( DIRECTORY_SEPARATOR ) . '(.*)$+',
		__DIR__,
		$remoteExtPathParts
	);

	$moduleTemplate = array(
		'localBasePath' => __DIR__,
		'remoteExtPath' => '../' . $remoteExtPathParts[2]
			. DIRECTORY_SEPARATOR . $remoteExtPathParts[3],
	);

	$modules = array(

		'wikibase.serialization.DeserializerFactory.tests' => $moduleTemplate + array(
			'scripts' => array(
				'DeserializerFactory.tests.js',
			),
			'dependencies' => array(
				'util.inherit',
				'wikibase.serialization.Deserializer',
				'wikibase.serialization.DeserializerFactory',
			),
		),

		'wikibase.serialization.SerializerFactory.tests' => $moduleTemplate + array(
			'scripts' => array(
				'SerializerFactory.tests.js',
			),
			'dependencies' => array(
				'util.inherit',
				'wikibase.serialization.Serializer',
				'wikibase.serialization.SerializerFactory',
			),
		),

	);

	return array_merge(
		$modules,
		include( __DIR__ . '/Serializers/resources.php' ),
		include( __DIR__ . '/Deserializers/resources.php' )
	);
} );
