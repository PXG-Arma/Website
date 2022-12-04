# Phoenix Group Web Site Development Repo

This repository contains source files for the PXG web site. It is also the place where its development happens. The site is deployed in repo [PXG-Arma/PXG-Arma.github.io](https://github.com/PXG-Arma/PXG-Arma.github.io).

To deploy the web site, PHP sources need to be compiled to HTML, possibly with the help of the tools listed below.

## Building

**Dependencies:**
- An Unix system or Cygwin
- GNU Make
- PHP (version 8 or greater)
- rsync

The web page sources are located in the root of the repo. Build process is automated with a makefile. PHP files can be compiled to HTML using the following command (executed in the repo root):
```console
make html
```

Compiled HTML files are placed in the directory `build`. To sync them, including the static content, to the deployment repo with rsync, use:
```console
make sync
```

The sync operation assumes that the deployment repo [PXG-Arma/PXG-Arma.github.io](https://github.com/PXG-Arma/PXG-Arma.github.io) is cloned in the same directory as this repo. For example in a directory named `PXG`:
```text
PXG
├── PXG-Arma.github.io
└── Website
```
