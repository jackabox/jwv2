---
title: Using VS Code with WSL
---



Visual Code tweaks:

- running VS code under windows, I had to configure it to read the proper php/terminal executable so that things would stop going haywire, in your settings add the following two lines

```json
"terminal.integrated.shell.windows": "C:\\WINDOWS\\system32\\bash.exe",
"php.validate.executablePath": "C:\\WINDOWS\\system32\\bash.exe"
```

- I also recommend Dayl Reese themes.