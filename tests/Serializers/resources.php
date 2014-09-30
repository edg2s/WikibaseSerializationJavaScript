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

		'wikibase.serialization.ClaimListSerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'ClaimListSerializer.tests.js',
			),
			'dependencies' => array(
				'wikibase.datamodel.Claim',
				'wikibase.datamodel.ClaimList',
				'wikibase.datamodel.PropertyNoValueSnak',
				'wikibase.serialization.ClaimListSerializer',
			),
		),

		'wikibase.serialization.ClaimsSerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'ClaimsSerializer.tests.js',
			),
			'dependencies' => array(
				'wikibase.datamodel',
				'wikibase.serialization.ClaimsSerializer',
			),
		),

		'wikibase.serialization.ClaimSerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'ClaimSerializer.tests.js',
			),
			'dependencies' => array(
				'wikibase.datamodel.Claim',
				'wikibase.datamodel.PropertyNoValueSnak',
				'wikibase.datamodel.SnakList',
				'wikibase.serialization.ClaimSerializer',
			),
		),

		'wikibase.serialization.EntityIdSerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'EntityIdSerializer.tests.js',
			),
			'dependencies' => array(
				'wikibase.datamodel',
				'wikibase.serialization.EntityIdSerializer',
			),
		),

		'wikibase.serialization.EntitySerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'EntitySerializer.tests.js',
			),
			'dependencies' => array(
				'wikibase.datamodel',
				'wikibase.serialization.EntitySerializer',
			),
		),

		'wikibase.serialization.FingerprintSerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'FingerprintSerializer.tests.js',
			),
			'dependencies' => array(
				'wikibase.datamodel.Fingerprint',
				'wikibase.datamodel.Term',
				'wikibase.datamodel.TermGroup',
				'wikibase.datamodel.TermGroupList',
				'wikibase.datamodel.TermList',
				'wikibase.serialization.FingerprintSerializer',
			),
		),

		'wikibase.serialization.MultilingualSerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'MultilingualSerializer.tests.js',
			),
			'dependencies' => array(
				'wikibase.serialization.MultilingualSerializer',
			),
		),

		'wikibase.serialization.ReferenceListSerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'ReferenceListSerializer.tests.js',
			),
			'dependencies' => array(
				'wikibase.datamodel.Reference',
				'wikibase.datamodel.ReferenceList',
				'wikibase.serialization.ReferenceListSerializer',
			),
		),

		'wikibase.serialization.ReferenceSerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'ReferenceSerializer.tests.js',
			),
			'dependencies' => array(
				'wikibase.datamodel',
				'wikibase.serialization.ReferenceSerializer',
			),
		),

		'wikibase.serialization.SiteLinkListSerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'SiteLinkListSerializer.tests.js',
			),
			'dependencies' => array(
				'wikibase.datamodel.SiteLink',
				'wikibase.datamodel.SiteLinkList',
				'wikibase.serialization.SiteLinkListSerializer',
			),
		),

		'wikibase.serialization.SiteLinkSerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'SiteLinkSerializer.tests.js',
			),
			'dependencies' => array(
				'wikibase.datamodel',
				'wikibase.serialization.SiteLinkSerializer',
			),
		),

		'wikibase.serialization.Serializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'Serializer.tests.js',
			),
			'dependencies' => array(
				'util.inherit',
				'wikibase.serialization.Serializer',
			),
		),

		'wikibase.serialization.SnakListSerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'SnakListSerializer.tests.js',
			),
			'dependencies' => array(
				'wikibase.datamodel',
				'wikibase.serialization.SnakListSerializer',
			),
		),

		'wikibase.serialization.SnakSerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'SnakSerializer.tests.js',
			),
			'dependencies' => array(
				'dataValues.values',
				'wikibase.datamodel.PropertyNoValueSnak',
				'wikibase.datamodel.PropertySomeValueSnak',
				'wikibase.datamodel.PropertyValueSnak',
				'wikibase.serialization.SnakSerializer',
			),
		),

		'wikibase.serialization.StatementListSerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'StatementListSerializer.tests.js',
			),
			'dependencies' => array(
				'wikibase.datamodel.Claim',
				'wikibase.datamodel.PropertyNoValueSnak',
				'wikibase.datamodel.Statement',
				'wikibase.datamodel.StatementList',
				'wikibase.serialization.StatementListSerializer',
			),
		),

		'wikibase.serialization.StatementSerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'StatementSerializer.tests.js',
			),
			'dependencies' => array(
				'wikibase.datamodel.Claim',
				'wikibase.datamodel.PropertyNoValueSnak',
				'wikibase.datamodel.Reference',
				'wikibase.datamodel.ReferenceList',
				'wikibase.datamodel.Statement',
				'wikibase.serialization.StatementSerializer',
			),
		),

		'wikibase.serialization.TermGroupListSerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'TermGroupListSerializer.tests.js',
			),
			'dependencies' => array(
				'wikibase.datamodel.Term',
				'wikibase.datamodel.TermGroupList',
				'wikibase.serialization.TermGroupListSerializer',
			),
		),

		'wikibase.serialization.TermGroupSerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'TermGroupSerializer.tests.js',
			),
			'dependencies' => array(
				'wikibase.datamodel.TermGroup',
				'wikibase.serialization.TermGroupSerializer',
			),
		),

		'wikibase.serialization.TermListSerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'TermListSerializer.tests.js',
			),
			'dependencies' => array(
				'wikibase.datamodel.Term',
				'wikibase.datamodel.TermList',
				'wikibase.serialization.TermListSerializer',
			),
		),

		'wikibase.serialization.TermSerializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'TermSerializer.tests.js',
			),
			'dependencies' => array(
				'wikibase.datamodel.Term',
				'wikibase.serialization.TermSerializer',
			),
		),

		'wikibase.serialization.Unserializer.tests' => $moduleTemplate + array(
			'scripts' => array(
				'Unserializer.tests.js',
			),
			'dependencies' => array(
				'util.inherit',
				'wikibase.serialization.Unserializer',
			),
		),

	);

	return $modules;
} );
