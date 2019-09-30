( function( wb, util ) {
	'use strict';

var MODULE = wb.serialization,
	PARENT = MODULE.Serializer,
	datamodel = require( 'wikibase.datamodel' );

/**
 * @class wikibase.serialization.MultiTermSerializer
 * @extends wikibase.serialization.Serializer
 * @since 2.0
 * @license GPL-2.0+
 * @author H. Snater < mediawiki@snater.com >
 *
 * @constructor
 */
MODULE.MultiTermSerializer = util.inherit( 'WbMultiTermSerializer', PARENT, {
	/**
	 * @inheritdoc
	 *
	 * @param {datamodel.MultiTerm} multiTerm
	 * @return {Object[]}
	 *
	 * @throws {Error} if multiTerm is not a MultiTerm instance.
	 */
	serialize: function( multiTerm ) {
		if( !( multiTerm instanceof datamodel.MultiTerm ) ) {
			throw new Error( 'Not an instance of datamodel.MultiTerm' );
		}

		var serialization = [],
			languageCode = multiTerm.getLanguageCode(),
			texts = multiTerm.getTexts();

		for( var i = 0; i < texts.length; i++ ) {
			serialization.push( {
				language: languageCode,
				value: texts[i]
			} );
		}

		return serialization;
	}
} );

}( wikibase, util ) );
