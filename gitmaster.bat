
@echo off
echo type "m = MASTER" or "w = WIP"

:P
set RAMA=
set /P RAMA=RAMA: %=%

if "%RAMA%"=="m" (

@echo off
echo type "s = Subir a github" or "b = bajar de github"
cd "C:\Users\asaiz\Documents\GitHub\bolsadetrabajo"

set GIT_PATH="C:\Program Files\Git\bin\git.exe"
set BRANCH = "master"

:P
set ACTION=
set /P ACTION=Action: %=%
if "%ACTION%"=="s" (

%GIT_PATH% init
%GIT_PATH% checkout master
  %GIT_PATH% add .
	%GIT_PATH% commit -am "Auto-committed on %date%"
	%GIT_PATH% push origin %BRANCH%
)
if "%ACTION%"=="b" (
%GIT_PATH% checkout master
%GIT_PATH% init
	%GIT_PATH% pull %BRANCH%
)
if "%ACTION%"=="exit" exit /b
goto P
)

if "%RAMA%"=="w" (

@echo off
echo type "s = Subir a github" or "b = bajar de github"
cd "C:\Users\asaiz\Documents\GitHub\bolsadetrabajo"

set GIT_PATH="C:\Program Files\Git\bin\git.exe"
set BRANCH = "WIP"

:P
set ACTION=
set /P ACTION=Action: %=%
if "%ACTION%"=="s" (
%GIT_PATH% checkout WIP
%GIT_PATH% init
  %GIT_PATH% add .
	%GIT_PATH% commit -am "Auto-committed on %date%"
	%GIT_PATH% push origin %BRANCH%
)
if "%ACTION%"=="b" (
git checkout WIP
%GIT_PATH% init
	%GIT_PATH% pull %BRANCH%
)
if "%ACTION%"=="exit" exit /b
goto P
)

if "%ACTION%"=="exit" exit /b
goto P