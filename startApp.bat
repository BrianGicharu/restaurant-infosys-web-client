@echo off

REM Start PHP built-in web server
start "" php -S localhost:3000

REM Pause execution for 1 second
ping 127.0.0.1 -n 1 -w 1000 > nul

REM Open Chrome browser with the specified URL
start chrome localhost:3000
