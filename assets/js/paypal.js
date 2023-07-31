document.addEventListener( 'DOMContentLoaded', function () {

	const subscribe_option = document.getElementById( 'cmd-subscription' ),
			donation_option = document.getElementById( 'cmd-donation' ),
			donation_form = document.getElementById( 'donation-form-paypal' );

	if ( ! subscribe_option || ! donation_option || ! donation_form ) {
		return;
	}

	const input_bn = donation_form.querySelector( 'input[name="bn"]' ),
			input_a3 = donation_form.querySelector( 'input[name="a3"]' ),
			input_t3 = donation_form.querySelector( 'input[name="t3"]' ),
			input_src = donation_form.querySelector( 'input[name="src"]' ),
			inputs_p3 = donation_form.querySelectorAll( 'input[name="p3"]' );

	subscribe_option.addEventListener( 'change', function( e ) {

		if ( ! this.checked ) {
			return;
		}

		input_bn.value = donation_form.dataset.subscribeBn;

		input_a3.disabled = false;
		input_t3.disabled = false;
		input_src.disabled = false;

		inputs_p3.forEach( function( radio ) {
			radio.disabled = false;
		} );
	} );

	donation_option.addEventListener( 'change', function( e ) {

		if ( ! this.checked ) {
			return;
		}

		input_bn.value = donation_form.dataset.donateBn;

		input_a3.disabled = true;
		input_t3.disabled = true;
		input_src.disabled = true;

		inputs_p3.forEach( function( radio ) {
			radio.disabled = true;
		});
	} );

	const event = new Event( 'change' );
	donation_option.dispatchEvent( event );

	donation_form.addEventListener( 'submit', function( e ) {
		input_a3.value = donation_form.querySelector( 'input#amount' ).value;
	} );
} );
