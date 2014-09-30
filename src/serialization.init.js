/**
 * @licence GNU GPL v2+
 * @author H. Snater < mediawiki@snater.com >
 */
( function( wb ) {
	'use strict';

	var MODULE = wb.serialization;

	MODULE.SerializerFactory.registerUnserializer(
		MODULE.ClaimUnserializer,
		wb.datamodel.Claim
	);

	MODULE.SerializerFactory.registerUnserializer(
		MODULE.EntityUnserializer,
		wb.datamodel.Entity
	);

	MODULE.SerializerFactory.registerUnserializer(
		MODULE.ReferenceUnserializer,
		wb.datamodel.SnakList
	);

	MODULE.SerializerFactory.registerUnserializer(
		MODULE.SnakListUnserializer,
		wb.datamodel.SnakList
	);

}( wikibase ) );
