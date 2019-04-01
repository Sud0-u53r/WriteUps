# WrestlerBook
## This challenge is an SQL Injection Challenge.

URL = 'http://bk.sunshinectf.org'

As soon as you open the link, a web page is displayed and It has login form.
It is so common to check whether there is an sql injection in the login form.

I tried the basic SQL injection payload username:'admin' and password:`' OR '1'='1` and it worked and we are logged in. But we can't find the flag there, instead there is hint that wrestler profile contains the flag.

Now we have to use boolean based injection to get the flag that might be in someone's profile.

First I checked the length of the table name and bruteforced each letter of the it using substr function to get the complere table name. After knowing the table name, I used the same technique to get the flag in flag column.

I used group_concat function to concat the multiple rows result into single string.

I used the condition `length(flag) > 15` because there are many flags with the value N/A which are obviously not useful for us and need to be ingnored.

![output.png](https://github.com/Sud0-u53r/WriteUps/blob/master/SunshineCTF2019/Web/WrestlerBook/output.png?raw=true)

Flag : `sun{ju57_4n07h3r_5ql1_chall}`
