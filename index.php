<html>
  <head>
    <title>Who SMS App</title>

<style>
body {
  font-family: sans-serif;
  width: 800px;
}
td.lbl {
  font-weight: bold;
  text-align: right;
  valign: top;
}
input, textarea {
  font-size: 14px;
}
h3 {
  margin: 0px;
  margin-top: 5px;
  margin-bottom: 5px;
  padding: 0px;
}
pre {
  margin-top: 5px;
  margin-left: 5px;
  color: #A33;
  background-color: #eee;
  padding: 5px;
}
code {
  color: #A33;
  background-color: #eee;
}
hr {
  margin-top: 15px;
  margin-bottom: 15px;
}
</style>
  </head>
  <body>
    <h1>Echo SMS App</h1>
    <hr>
    This simple application that echos, or sends back, the text that is sent to it. 
<hr>
<h3>Sawanet Configuration</h3>
In order for this application to work with <a href="http://www.sawanet.com">Sawanet</a>, you'll need to configure your keyword to post to the URL for this application.  For this app that URL is: <code>http://echo.aws.af.cm/receive.php?text=%(text)s&number=%(number)s</code>  You'll also need to set the delivery method to be <b>POST</b> and to check the <b>Delivery Response</b> option.
<hr>
<h3>Testing</h3>
You can test the application without sending SMSes by using the form below.<br/><br/>
    <form method="POST" action="receive.php">
      <table>
        <tr>
          <td class="lbl">Phone</td><td><input type="text" name="phone" value="250788123123"></input></td>
        </tr>
        <tr>
          <td class="lbl">Message</td><td><textarea name="text" cols=80 rows=2>This is my text</textarea></td>
        </tr>
        <tr>
          <td></td><td><input type="submit" value="Test Message"></input></td>
        </tr>
      </table>
    </form>
  </body>
</html>



