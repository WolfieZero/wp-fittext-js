WP FitText.js
===============================================================================

Adds the [non-jQuery version of FixText](https://github.com/adactio/FitText.js)
to your pages and lets you make changes via shortcodes


Installation
-------------------------------------------------------------------------------

1. Upload the files to the /wp-content/plugins/wp-fittext-js/ directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.


Usage
-------------------------------------------------------------------------------

Once installed, you can add FitText to any ID element via this short code

[fittext id="element_id" ratio="1.6"]

The `ratio` isn't required as it will just default to `1` but chances you'll
need to use it.

Regards to using the ID; that's because at the moment
`document.getElementById()` is the quickest way to access the DOM element.



Changlog
-------------------------------------------------------------------------------

### 1.0.0

- initial release
