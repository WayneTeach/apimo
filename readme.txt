=== Official apimo connector ===
Contributors:
Tags: real estate, property management, listings, clients, leads, showings, open houses, reports
Tested up to: 6.1.1
Stable tag: 2.3
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Are you a real estate agent or broker looking for a way to streamline your business operations? Look no further! Our plugin is here to help.

With Manage Real Estate Business, you can easily:

- List and manage properties for sale or rent
- Schedule and manage showings and open houses

Our plugin integrates seamlessly with your WordPress website and is user-friendly and intuitive. Start streamlining your real estate business today with Manage Real Estate Business!

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/manage-real-estate-business` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the plugin by going to the 'Apimo' menu in WordPress
4. Obtain the token and 4-digit provider ID (provider ID) for express Api overt access to this site from the Apimo support team.
5. In General Settings > Add your API key: paste the token. In Company ID > paste the provider ID. Validate Key should display 'your keys are valid' (verify with support if this is not the case). Clear all data: use this only if you want to change the agency connected to the site; it will erase all data imported from Apimo.
6. In settings : Add the slug: they must be different for the page of the individual product (single slug) and for the archive. They generate a complete page that can be added to the site. Choose main and secondary colors, primary labels and titles, secondary price. Choose in Container setting the width of the page.
7. Choose in Container setting the width of the page. In Layout > choose the display of products (do not check 'Show unavailable services', it is only used for debugging). The number of columns in the product list is: desktop 2, tablet 2, mobile 1 (the site is not optimized for other choices).
8. Choose the search filters. In 'Number of posts per page', choose a multiple of 2. In 'Gallery display type', one of the two must be checked. Enable Meta fields and save.
9. In Apimo > Logs, launch the Run scheduler to retrieve products.
10. Customization: Customize the pages: See the site > Customize > add elements to the main menu of the site.
11. Shortcode: In Apimo > Apimo: generate the shortcode. This process will allow you to generate a selection of products or extract all buildings. Choose the selection of products: with this command you can filter products by rental and sale by choosing the category filter. To filter properties by category, do not select the filter in step 2. You will then choose the other filters and follow the steps of the plug-in until the shortcode is generated. It is possible to filter products by filters, by tags, or by manually selecting the products. In the site > + New > Create a new page, name it, paste the shortcode, confirm. You can also generate shortcodes that filter by custom_tag (custom attributes).
12. To view all instructions, please see the Installation instructions file [Installation instruction](https://wordpress.org/plugins/).



== Frequently Asked Questions ==

= What types of personal data are collected? =

The plugin collects user identification information, such as full name, date of birth, telephone number, and job title, as well as information about the user's private or professional clients/prospects, including surname, first name, company name, postal address, and telephone number. Sensitive data such as racial or ethnic origin, political opinions, religious or philosophical beliefs, and trade union membership is not collected, unless required by law.

= How is personal data collected? =

Personal data is collected directly from the users of the agencies, or from the agency manager when an account is created or when the user contacts the service. The personal data can be accessed and updated in the "My Account" area after logging in.

= How is personal data used and shared? =

Personal data is used to provide access to the data in the context of the plugin's mission as a subcontractor. Depending on the needs of the user's activities, certain information may be shared with partners, including third party real estate portals and applications.

= How long is personal data kept? =

Personal data is kept for the duration of the subscription agreement, or for as long as is necessary for the purposes for which it was collected.

= What are the rights of the user? =

Users have the right to access, rectify, erase, and object to the processing of their personal data, as well as the right to data portability. Users also have the right to withdraw their consent to the processing of their personal data at any time. Users can exercise their rights by contacting the service through the "My Account" area or by emailing [insert email address].

== Screenshots ==
1. The Apimo Dashboard.
![Apimo Dashboard](assets/screenshot-1.png)

2. The plugin installation and API connection process.
![Plugin Installation and API Connection](assets/screenshot-2.png)

3. The plugin settings page.
![Settings](assets/screenshot-3.png)

4. The settings page for the Archive Properties feature.
![Setting - Archive Properties](assets/screenshot-4.png)

5. The filter and pagination feature.
![Filter and Pagination](assets/screenshot-5.png)

6. The manual run feature.
![Manually Run](assets/screenshot-6.png)

7. The generate shortcode feature.
![Generate Shortcode](assets/screenshot-7.png)

8. The generate shortcode filter feature.
![Generate Shortcode Filter](assets/screenshot-8.png)

9. The feature for selecting a filter method to show properties in the shortcode.
![Generate Shortcode - Select a filter method to show your properties in the shortcode](assets/screenshot-9.png)


== Changelog ==

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.0 =
Initial release.

== Assets ==
![Plugin Logo](assets/Apimologo.png)
