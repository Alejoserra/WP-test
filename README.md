# WP-test
WP-test

Exercies done for WP Rocket test



WP Rocket test

1 ) A WP Rocket customer website is hosted on a managed offer with its own caching system. To prevent any incompatibility, they ask to disable WP Rocket cache only and still use the other features.

Using WP Rocket hooks, disable the static file cache creation
Using WP Rocket hooks, purge the host cache system when calling the clear cache in WP Rocket. The host function is: managed_clear_cache();

This should be done by creating a plugin/mu-plugin

2 ) A WP Rocket customer is using the user cache option to provide the cache to logged-in users. But he would like to prevent caching for administrators.

By creating a plugin/mu-plugin, disable caching for administrators only.
WP Rocket detects the DONOTCACHEPAGE constant value to determine if the current page should be cached

3 ) A WP Rocket customer is displaying different content depending on the country of origin of its visitors, so he wants a different cache version based on the country. The country is saved as a cookie in the visitor browser, with the name origin_country.

Using WP Rocket hooks, prevent serving the cache until a cookie named origin_country is set on the visitor browser.
Using WP Rocket hooks, serve the corresponding cache version based on the value of the origin_country cookie.

This should be done by creating a plugin/mu-plugin
