@echo off
cd /D %~dp0
cmd.exe /C start "" /MIN call "C:\Users\ADMIN\Downloads\index.html\killprocess.bat" "httpd.exe"
if not exist apache\logs\httpd.pid GOTO exit
del apache\logs\httpd.pid

:exit
