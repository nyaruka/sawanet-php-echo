Echo AppFog / Sawanet App
------------------------

This is a very, very simple PHP application that demonstrates creating an SMS endpoint for Sawanet. (http://www.sawanet.com)

The application simply echos the text message that is sent to it.

Example::

    >>> Hello World
    <<< You sent: Hello World

Getting Started
-----------------

Now download the git repo into your webserver directory::
 
    % git clone git://github.com/nyaruka/sawanet-php-echo.git echo

You should be able to test the application at ``http://localhost/echo``


Installing at Appfog
---------------------

You'll first need to create an account on http://appfog.com/ and download the appfog utility programs.  Then create a Django application using the AppFog web interface, naming it whatever you'd like.  You can then upload your application::

    % af login
    % af update echo   <-- replace who with your app name


Configuring on Sawanet
-------------------------

If you have your application running on AppFog, you can make it work with the 8080 shortcode on Sawanet in just a few minutes.  First go to http://www.sawanet.com and create an account by entering your phone number and click "Start Now".

Once you confirm your account details, claim a keyword to use.  You'll do this by sending a message with the keyword you want to the 8080 shortcode::

    claim echo    <-- replace with your own keyword

You can now configure your keyword to post incoming messages to your AppFog application.  Go to the configuration page for your keyword and click on the "Receiving Message" tab.  Using the AppFog domain you chose, enter the delivery URL as follows. (in this example, my AppFog domain is ``echo.aws.af.cm``::

    http://echo.aws.af.cm/receive.php?text=%(text)s&number=%(number)s

Set the **Delivery Method** to ``POST``, check the box for **Delivery Response**, then click **Save Delivery Settings**.

From that point on anyone will be able to send messages to your PHP application using the keyword you picked.




