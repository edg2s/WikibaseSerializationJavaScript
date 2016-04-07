/**
 * @license GPL-2.0+
 * @author H. Snater < mediawiki@snater.com >
 */
( function( wb, QUnit ) {
'use strict';

QUnit.module( 'wikibase.serialization.ClaimGroupSerializer' );

var testSets = [
	[
		new wb.datamodel.ClaimGroup( 'P1' ),
		[]
	], [
		new wb.datamodel.ClaimGroup( 'P1',
			new wb.datamodel.ClaimList( [
				new wb.datamodel.Claim( new wb.datamodel.PropertyNoValueSnak( 'P1' ) )
			] )
		),
		[
			{
				mainsnak: {
					snaktype: 'novalue',
					property: 'P1'
				},
				type: 'claim'
			}
		]
	]
];

QUnit.test( 'serialize()', function( assert ) {
	assert.expect( 2 );
	var claimGroupSerializer = new wb.serialization.ClaimGroupSerializer();

	for( var i = 0; i < testSets.length; i++ ) {
		assert.deepEqual(
			claimGroupSerializer.serialize( testSets[i][0] ),
			testSets[i][1],
			'Test set #' + i + ': Serializing successful.'
		);
	}
} );

}( wikibase, QUnit ) );
