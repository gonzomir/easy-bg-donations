( function() {
	var __ = wp.i18n.__;
	var el = wp.element.createElement;
	var registerBlockType = wp.blocks.registerBlockType;
	var ServerSideRender = wp.serverSideRender;

	/**
	 * Register Basic Block.
	 *
	 * Registers a new block provided a unique name and an object defining its
	 * behavior. Once registered, the block is made available as an option to any
	 * editor interface where blocks are implemented.
	 *
	 * @param  {string}   name     Block name.
	 * @param  {Object}   settings Block settings.
	 * @return {?WPBlock}          The block, if it has been successfully
	 *                             registered; otherwise `undefined`.
	 */
	registerBlockType( 'ebd/donate-epay', {
		title: __( 'Donate with ePay', 'ebd' ),
		icon: 'awards',
		category: 'widgets',
		description: __( 'Shows ePay donation form.', 'ebd' ),

		edit: function( props ) {

			return el( ServerSideRender, {
				block: 'ebd/donate-epay',
				attributes: props.attributes,
			});

		},

		save: function( props ) {
			return '';
		},

	} );
} )();
