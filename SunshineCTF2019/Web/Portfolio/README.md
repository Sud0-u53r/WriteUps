# Portfolio
## This is a Server Side Template Injection Challenge.

URL = `http://folio.sunshinectf.org/`

Given link contains a page with two links.
	- Custom greeting
	- Dynamic page rendering

If we go to Custom greeting [http://folio.sunshinectf.org/hello/name] which has `Hello name! Welcome to world of Flask.`, which tells us that it is a python flask server. If we change the name to some other name like `http://folio.sunshinectf.org/hello/Ak` we get `Hello Ak! Welcome to world of Flask.` which means the last part of the url is kept in the source code.

Hmm.. Now I tried to give `http://folio.sunshinectf.org/hello/{{7*7}}` and hope it would give `Hello 49!`, But no use :(

Then I went to Dynamic page rendering [http://folio.sunshinectf.org/render.html] which has a form which posts data `template=/template/matches.html` and `template=/template/teams.html` and we can also access `template=/template/admin.html`.

But visiting these sites is of no use. If we visit `admin.html` we can see `{% if config.DEBUG %} {{config.FLAG}} {% endif %} Hi there!` But if we post that as value to template in render, we can see the `{{}}` parts are evaluated. And the flag is in the properties of config variable.

Now I tried to send `/hello/{{7*7}}` as value of template to render.html and it worked and returned `Hello 49! Welcome to world of Flask.`. Now I tried to print the properties of config variable and it contains the flag.

Flag is sun{5l33333p_15_f0r_7h3_w34k}
