About
=====
This package is a web2py for fluxflex.


Installing
==========
1. Go http://www.fluxflex.com/library/47
2. And Click [Install]

That's all.

See also "How to deploy/use web2py on free fluxflex hosting", http://vimeo.com/28112026.
Thank you mdipierro.

Admin
=====
Web2py provides Admin Interface in addition to fluxflex.

How to access admin page
------------------------
You need to change HTTPS. And add "admin" in back of domain.
Example: https://YOURPROJECT.fluxflex.com/admin

Admin password
--------------
Admin password in web2py is the same as fluxflex Database password.
Fluxflex Database password is written in this URL.
https://www.fluxflex.com/projects/YOURPROJECT/instruction/database

How to add your applications
============================
1. clone from fluxflex repository.
2. copy your application(in web2py/applications/YOUR_APP) to public_html/applications folder in the repository.
3. add new files to the repository.
4. commit and push

Developing in local
===================
There are no web2py files in cloned fluxflex repo. Because web2py files are unzip when Setup in fluxflex server.
But it is necessary for web2py files to develop in local. The below is "Developing in local".

1. clone from fluxflex repository.
2. unzip web2py.zip in temporary directory.
3. copy web2py directory files in public_html directory.

!Attention!  It is NOT necessary to add unziped files in the git repo.
