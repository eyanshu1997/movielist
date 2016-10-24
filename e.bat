@echo off
setlocal disableDelayedExpansion
pushd %1
set "tab=    "
set "indent="
call :run >report.txt
exit /b

:run
for %%F in (.) do echo %%~fF

:listFolder
setlocal
set "indent=%indent%%tab%"
for %%F in (*) do echo %indent%%%~tF   %%F
for /d %%F in (*) do (
  echo %indent%.\%%F
  pushd "%%F"
  call :listFolder
  popd
)
exit /b