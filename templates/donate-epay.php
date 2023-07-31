<form action="https://www.epay.bg/v3main/paylogin" method="post" class="donations" id="donation-form-epay">
  <input type="hidden" name="MIN" value="<?php echo esc_attr( $args['min'] ); ?>"/>
  <input type="hidden" name="DESCR" value="<?php echo esc_attr( $args['item_name'] ); ?>"/>
  <input type="hidden" name="ENCODING" value="utf-8"/>
  <input type="hidden" name="URL_OK" value="<?php echo esc_url( $args['ok_url'] ); ?>"/>
  <input type="hidden" name="URL_CANCEL" value="<?php echo esc_url( $args['error_url'] ); ?>"/>

  <fieldset>
    <legend><?php esc_html_e( 'Enter amount', 'ebd' ); ?></legend>

    <p>
      <label for="TOTAL"><?php esc_html_e( 'Amount in BGN', 'ebd' ); ?></label><br />
      <input type="number" name="TOTAL" required value="" id="TOTAL" min="1" step="1" />
    </p>

  </fieldset>
  <button type="submit"><?php esc_html_e( 'Donate', 'ebd' ); ?></button>
</form>
