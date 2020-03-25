# SQLi v2
Author : @Sud0-u53r

#### Description: Now Try this One \~_~. Link - http://10.11.4.98/0351d68b68e227cb738531b350e946c5/

#### Boolean based blind SQL injection

First take a look at SQLi challenge writeup to get an idea on what's happening and what to do.

Since we can only see whether we are logged in or not, we have to write a query such that the it returns two columns only when given condition satisfy. Then we have to use that condition to bruteforce all the the characters returned by that inner query.

The exploit script contains the query and procedure. Take a look at it.

<pre>
Flag: Invader{Woah!...M@N_Ar3_Y0U_h4ck3r_0r_Wh@&!___#Bl0wn_my_m1nd___+_+}
</pre>
