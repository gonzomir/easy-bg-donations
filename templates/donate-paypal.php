<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="donations" id="donation-form-paypal" data-donate-bn="<?php echo esc_attr( $args['donate_bn'] ); ?>" data-subscribe-bn="<?php echo esc_attr( $args['subscribe_bn'] ); ?>">
  <input name="charset" value="utf-8" type="hidden">
  <input name="bn" value="<?php echo esc_attr( $args['donate_bn'] ); ?>" type="hidden">
  <input name="business" value="<?php echo esc_attr( $args['business'] ); ?>" type="hidden">
  <input name="return" value="<?php echo esc_url( $args['return_url'] ); ?>" type="hidden">
  <input name="item_name" value="<?php echo esc_attr( $args['item_name'] ); ?>" type="hidden">
  <input name="rm" value="0" type="hidden">
  <input name="currency_code" value="EUR" type="hidden">
  <input name="no_shipping" value="1" type="hidden">

  <input type="hidden" name="a3" value="0.98" disabled="disabled" />
  <input type="hidden" name="t3" value="M" disabled="disabled" />
  <input type="hidden" name="src" value="1" disabled="disabled" />

  <fieldset>
    <legend><?php esc_html_e( 'Choose donation type', 'ebd' ); ?></legend>
      <p role="radiogroup">
        <input type="radio" name="cmd" value="_donations" id="cmd-donation" required checked /><label for="cmd-donation"><?php esc_html_e( 'Single donation', 'ebd' ); ?></label>
        <input type="radio" name="cmd" value="_xclick-subscriptions" id="cmd-subscription" /><label for="cmd-subscription"><?php esc_html_e( 'Recurring donation', 'ebd' ); ?></label>
      </p>
      <p role="radiogroup">
        <input type="radio" name="p3" value="3" id="p3-3" required /><label for="p3-3"><?php esc_html_e( 'Every three months', 'ebd' ); ?></label>
        <input type="radio" name="p3" value="6" id="p3-6" /><label for="p3-6"><?php esc_html_e( 'Every six months', 'ebd' ); ?></label>
      </p>
  </fieldset>

  <fieldset>
    <legend><?php esc_html_e( 'Enter amount', 'ebd' ); ?></legend>

    <p>
      <label for="amount"><?php esc_html_e( 'Amount in Euro', 'ebd' ); ?></label><br />
      <input type="number" name="amount" required value="" id="amount" min="1" step="1" aria-describedby="amaount-note-paypal" /><br />
      <span id="amaount-note-paypal"><?php esc_html_e( 'Since PayPal doesn\'t support BGN the value of this field should be in Euro.', 'ebd' ); ?></span>
    </p>

  </fieldset>
  <button type="submit" aria-describedby="donation-note-paypal"><?php esc_html_e( 'Donate', 'ebd' ); ?></button> <span id="donation-note-paypal" class="note"><?php esc_html_e( 'with debit or credit card by PayPal', 'ebd' ); ?></span>
</form>
