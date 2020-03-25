# Again PHP?!!

#### Description: Link - http://10.11.4.98/63ffe14000499e9061fd1ff634361a67/

The link has /?source in source code commented out. If you give source as get parameter, it shows the source code of the whole php file.

We have to do two things here.<br>
&nbsp;&nbsp;&nbsp;&nbsp;-> First bypass _ check in $_SERVER['QUERY_STRING'] by using '.'. The PHP automatically converts "give.me" in param names to "give_me".<br>
&nbsp;&nbsp;&nbsp;&nbsp;-> Second bypass is somewhat tricky. You have to use the PHP reference concept which used "&" symbol to point one variable to another variable.

First copy the U class to your local php server and create an instance of that class. And then set the $this -> t to 'a' and $this -> n to $this -> f.

Since the program only prints the name of the user. And now serialize the object and send it to the webpage.<br>

Final payload : http://10.11.4.98/63ffe14000499e9061fd1ff634361a67/?source&give.me=FLAG&object=O:1:%22U%22:3:{s:1:%22n%22;N;s:1:%22t%22;s:1:%22a%22;s:1:%22f%22;R:2;}

Flag : Invader{7hi5_0n3_i5_g000d!!!}
