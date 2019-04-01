# Wrestler Name Generator
## This challenge is XML External Entity (XXE) Challenge.

URL = `http://ng.sunshinectf.org/`

The webpage in given url contain two name fields and a dropdown box.
If we give some input and submit then we will be redirected to /generate.php?input=`some base64 content` and it is displaying our firstname and lastname with some random middle name (Some cool names ;)

I immediately decoded the base64 and found that it is XML content that is sent as input to the generate.php.

And I tried to give some input like < and > symbols and it gave me an error which contains clues that it is using simplexml_load_string function in php to parse the XML content.

I tried the basic XXE payload by sending base64 encoded string of `<?xml version='1.0' encoding='UTF-8'?><!DOCTYPE test [<!ENTITY xxe SYSTEM 'php://filter/convert.base64-encode/resource=generate.php'>]><input><firstName>&xxe;</firstName></input>` and tried to read the generate.php file.

It worked and returned me some base64 string. I decoded it and got the source code of generate.php.

As it is mentioned in the source code that if we can access the generate.php file as local server then we can get the flag that is stored in Environment variable.

Now we can use base64 of `<?xml version='1.0' encoding='UTF-8'?><!DOCTYPE test [<!ENTITY xxe SYSTEM 'http://localhost/generate.php'>]><input><firstName>&xxe;</firstName></input>` to get the content of generate.php as visited by the local server and It contains the flag.

Flag : `sun{1_l0v3_hulk_7h3_3x73rn4l_3n717y_h064n}`
