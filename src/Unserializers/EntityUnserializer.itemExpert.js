/**
 * @licence GNU GPL v2+
 * @author H. Snater < mediawiki@snater.com >
 */
( function( wb, util ) {
'use strict';

var MODULE = wb.serialization,
	PARENT = MODULE.Unserializer;

/**
 * Unserializer for parts of an Item Entity that are specific to Items.
 *
 * @constructor
 * @extends {wikibase.serialization.Unserializer}
 * @since 1.1
 */
var ItemUnserializationExpert =
	util.inherit( 'WbEntityUnserializerItemExpert', PARENT,
{
	/**
	 * @see wikibase.serialization.Unserializer.unserialize
	 *
	 * @return {Object}
	 */
	unserialize: function( serialization ) {
		var siteLinkUnserializer = new MODULE.SiteLinkUnserializer(),
			siteLinks = [];

		for( var siteId in serialization.sitelinks ) {
			siteLinks.push( siteLinkUnserializer.unserialize( serialization.sitelinks[siteId] ) );
		}

		return siteLinks;
	}
} );

MODULE.EntityUnserializer.registerTypeSpecificExpert(
	wb.datamodel.Item.TYPE,
	ItemUnserializationExpert
);

}( wikibase, util ) );
