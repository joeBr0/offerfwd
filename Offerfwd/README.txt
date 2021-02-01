=== Offerfwd ===
Contributors: 1
Tags: opt-in, ads, monetization
Requires at least: 3.0.1
Tested up to: 5.6
Stable tag: 4.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

The Offerfwd plugin enables you to add opt-in offers from your partners to your WP page(s). You will need to create a Connections account at conx.opt-in.net in order to use it. The Connections platform is owned and operated by Opt-Intelligence.

== Description ==

The Offerfwd plugin enables you to add opt-in offers from your partners to your WP page(s). You will need to create a Connections account at conx.opt-in.net in order to use it.

With the Connections platform you will be able to create a unique placement which you will add your partner offers to. The placement is then populated into the plugin's iframe on the page(s) where you want the opt-in offers to be displayed.

The Connections platform (conx.opt-in.net) is owned and operated by Opt-Intelligence. The privacy policy for the Connections platform can be found at: https://www.opt-intelligence.com/privacy-policy/

The URL which is called within the iframe is adfwd.com, also owned and operated by Opt-Intelligence. The privacy policy for the Connections platform can also be found at: https://www.opt-intelligence.com/privacy-policy/

For each user who visits the page(s) where you have the plugin shortcode integrated, this plugin reaches out to Opt-Intelligence, with non-personally identifiable and/or one-way hashed information which you populate into the adfwd.com URL, if any, and Opt-Intelligence then returns the relevant offers which you have added and designated to the Connections platform.

== Installation ==

Follow the steps below:

1. Install the Offerfwd plugin.
2. Sign up for Connections account at conx.opt-in.net.
3. Create a new placement on the Connection platform.
4. Create one or more partner offers on the Connections platform.
5. Assign the partner offer(s) to your placement on the Connections platform.
6. Add the shortcode [offerfwd_joix] to your wordpress page where you want the offers to be displayed.
7. Populate the URL of the page where the offers will be displayed as described below:

URL framework:
{wordpress url}?pid=xxxxxx&jurl=&email=xxxxxx&fname=xxxxxx&lname=xxxxxx&hphone=xxxxxx

pid = placement ID which you get from conx.opt-in.net
jurl = url which the user should be presented within the iframe after ther user submits (not requried). IF no jurl variable is populated then 'http://web.opt-intelligence.com/app/html/blank.html'
email = user's email address IF you have it and wish to 
fname = user's first name IF you have it
lname = user's last name IF you have it
hphone = user's home/cell phone IF you have it


Example URL:
https://blog.opt-intelligence.com/test-page/?pid=29173248&email=jimmy54@opt-in.net&fname=jim&lname=beam&hphone=4156660404


== Frequently Asked Questions ==

= Is it free for me? =

It is free for all publishers who want to display opt-in offers on their website.

= Is it free for my partners? =

There is a small cost for any partners who want to run their offers on your placement. You can find more information about pricing at http://conx.opt-in.net/pricing

== Screenshots ==

== Changelog ==

== Arbitrary section ==

== A brief Markdown Example ==
