@echo off
rem START or STOP Services
rem ----------------------------------
rem Check if argument is STOP or START

if not ""%1"" == ""START"" goto stop

if exist C:\Users\ADMIN\Downloads\index.html\hypersonic\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\server\hsql-sample-database\scripts\ctl.bat START)
if exist C:\Users\ADMIN\Downloads\index.html\ingres\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\ingres\scripts\ctl.bat START)
if exist C:\Users\ADMIN\Downloads\index.html\mysql\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\mysql\scripts\ctl.bat START)
if exist C:\Users\ADMIN\Downloads\index.html\postgresql\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\postgresql\scripts\ctl.bat START)
if exist C:\Users\ADMIN\Downloads\index.html\apache\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\apache\scripts\ctl.bat START)
if exist C:\Users\ADMIN\Downloads\index.html\openoffice\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\openoffice\scripts\ctl.bat START)
if exist C:\Users\ADMIN\Downloads\index.html\apache-tomcat\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\apache-tomcat\scripts\ctl.bat START)
if exist C:\Users\ADMIN\Downloads\index.html\resin\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\resin\scripts\ctl.bat START)
if exist C:\Users\ADMIN\Downloads\index.html\jetty\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\jetty\scripts\ctl.bat START)
if exist C:\Users\ADMIN\Downloads\index.html\subversion\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\subversion\scripts\ctl.bat START)
rem RUBY_APPLICATION_START
if exist C:\Users\ADMIN\Downloads\index.html\lucene\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\lucene\scripts\ctl.bat START)
if exist C:\Users\ADMIN\Downloads\index.html\third_application\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\third_application\scripts\ctl.bat START)
goto end

:stop
echo "Stopping services ..."
if exist C:\Users\ADMIN\Downloads\index.html\third_application\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\third_application\scripts\ctl.bat STOP)
if exist C:\Users\ADMIN\Downloads\index.html\lucene\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\lucene\scripts\ctl.bat STOP)
rem RUBY_APPLICATION_STOP
if exist C:\Users\ADMIN\Downloads\index.html\subversion\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\subversion\scripts\ctl.bat STOP)
if exist C:\Users\ADMIN\Downloads\index.html\jetty\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\jetty\scripts\ctl.bat STOP)
if exist C:\Users\ADMIN\Downloads\index.html\hypersonic\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\server\hsql-sample-database\scripts\ctl.bat STOP)
if exist C:\Users\ADMIN\Downloads\index.html\resin\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\resin\scripts\ctl.bat STOP)
if exist C:\Users\ADMIN\Downloads\index.html\apache-tomcat\scripts\ctl.bat (start /MIN /B /WAIT C:\Users\ADMIN\Downloads\index.html\apache-tomcat\scripts\ctl.bat STOP)
if exist C:\Users\ADMIN\Downloads\index.html\openoffice\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\openoffice\scripts\ctl.bat STOP)
if exist C:\Users\ADMIN\Downloads\index.html\apache\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\apache\scripts\ctl.bat STOP)
if exist C:\Users\ADMIN\Downloads\index.html\ingres\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\ingres\scripts\ctl.bat STOP)
if exist C:\Users\ADMIN\Downloads\index.html\mysql\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\mysql\scripts\ctl.bat STOP)
if exist C:\Users\ADMIN\Downloads\index.html\postgresql\scripts\ctl.bat (start /MIN /B C:\Users\ADMIN\Downloads\index.html\postgresql\scripts\ctl.bat STOP)

:end

