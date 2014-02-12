Dial Alt-Fest
=============

This repro is a phone powered jukebox that plays random tracks for each caller. Created to help support Alt-Fest - buy tickets here: http://www.alt-fest.com/index.html

You can read the Twilio "HowTo" doc on IVR's here: https://www.twilio.com/docs/howto/ivrs-the-basics

Preparation
===========
<ul>
<li>Open an account on http://twilio.com</li>
<li>Buy a phone number in your country of choice http://www.twilio.com/docs/howto/search-and-buy</li>
</ul>

Creating the IVR App
====================

In the .php file just...

<ul>
<li>Line 7 Set the correct path to your tracks</li>
<li>Line 24 Add your Twilio number
</ul>


Configuring your Twilio number
==============================
<ul>
<li>Once you have uploaded your XML document you just need to tell Twilio the URL of where to find it.</li>
<li>Sign into your account on http://twilio.com and click on 'Numbers' in the navigation at the top of the page.</li>
<li>Find the number you want your conference room to hang from and click on it.</li>
<li>In the 'Voice Request URL' field type in the URL where you stored your XML.</li>
<li>Click the 'Save Changes' button</li>
</ul>

That's it you're done!


Useful Links
============

All things Twilio - http://twilio.com<br>
Twilio technical docs - http://twilio.com/docs<br>
Need help? - http://forum.twilio.com/twilio/<br>
Need inspiration? - http://twilio.com/gallery/customers<br>
Need a Twilio coder? - http://twilio.com/doers<br>
Want to work for Twilio in Europe? - http://bitly.com/bundles/jamesparton/3

