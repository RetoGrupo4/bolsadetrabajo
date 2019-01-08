
@echo off
echo type "s = Subir a github" or "b = bajar de github"
cd "C:\Users\asaiz\Documents\GitHub\bolsadetrabajo"


set GIT_PATH="C:\Program Files\Git\bin\git.exe"
set BRANCH = "master"


:P
set ACTION=
set /P ACTION=Action: %=%
if "%ACTION%"=="s" (


	
	%GIT_PATH% add .
	%GIT_PATH% commit -am "Auto-committed on %date%"
	%GIT_PATH% push origin %BRANCH%



)
if "%ACTION%"=="b" (
	
	%GIT_PATH% pull --tags
	%GIT_PATH% pull %BRANCH%
)
if "%ACTION%"=="exit" exit /b
goto P
