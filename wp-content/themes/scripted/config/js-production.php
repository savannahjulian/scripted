<? # Production Scripts
  # ScriptEd Specific
  wp_register_script('app', get_template_directory_uri() . '/scripts/app.min.js', array('vendor'), '0.1.0', true);

  wp_localize_script('app', 'global', array(
    'ajax_url' => admin_url('admin-ajax.php'),
    'environment' => SE_ENVIRONMENT,
    'stripe_publishable_key' => SE_STRIPE_PUBLISHABLE_API_KEY
  ));

  wp_enqueue_script('app');

  # Vendor Libraries
  wp_register_script('vendor', get_template_directory_uri() . '/scripts/vendor.min.js', array(), '0.1.0', false);
  wp_enqueue_script('vendor');

  # Stripe
  wp_register_script('stripe', 'https://js.stripe.com/v2/', array('vendor'), '', false);
  wp_enqueue_script('stripe');