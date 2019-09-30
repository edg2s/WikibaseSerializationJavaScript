( function( wb, util ) {
	'use strict';

var MODULE = wb.serialization,
	PARENT = MODULE.Deserializer,
	datamodel = require( 'wikibase.datamodel' ),
	StatementGroupDeserializer = require( './StatementGroupDeserializer.js' );

/**
 * @class wikibase.serialization.StatementGroupSetDeserializer
 * @extends wikibase.serialization.Deserializer
 * @since 2.0
 * @license GPL-2.0+
 * @author H. Snater < mediawiki@snater.com >
 *
 * @constructor
 */
MODULE.StatementGroupSetDeserializer = util.inherit( 'WbStatementGroupSetDeserializer', PARENT, {
	/**
	 * @inheritdoc
	 *
	 * @return {datamodel.StatementGroupSet}
	 */
	deserialize: function( serialization ) {
		var statemenGroupDeserializer = new StatementGroupDeserializer(),
			statementGroups = [];

		for( var propertyId in serialization ) {
			statementGroups.push(
				statemenGroupDeserializer.deserialize( serialization[propertyId] )
			);
		}

		return new datamodel.StatementGroupSet( statementGroups );
	}
} );

}( wikibase, util ) );
