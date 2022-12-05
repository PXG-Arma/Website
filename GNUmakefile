#
# Compiles all PHP files in the current working directory to HTML in
# the build directory. Uses PHP files in the lib directory as dependencies.
#
# Syncs the compiled HTML files and the content in the static directory
# to the repo path based. Outdated files are detected by checksums.
#
# Dependencies:
# * PHP
# * rsync
#

# Directory to write compiled HTML pages into
BUILD_DIR = build
# Directory containing the static web page source files
STATIC_DIR = static
# Directory containing PHP library files
PHP_LIB_DIR = include
# Directories containing PHP source files
PHP_SRC_DIRS = . training
# Path to the root of the web site deployment repository
REPO_PATH = ../PXG-Arma.github.io
# PHP executable to use
PHP = php

# Common parameters for rsync operations
RSYNC_PARAMS = -aic

# PHP libraries required to process the sources
PHP_LIBS := $(wildcard $(PHP_LIB_DIR)/*.php)
# PHP source files to process with PHP to HTML
PHP_SOURCES := $(foreach dir, $(PHP_SRC_DIRS), $(wildcard $(dir)/*.php))
# Target HTML files in the build directory
HTML_PAGES := $(addprefix $(BUILD_DIR)/,$(PHP_SOURCES:.php=.html))

.PHONY: html source-dirs clean sync

# Compiles all PHP sources to HTML
html: $(HTML_PAGES)

# Processes a .php file with PHP to produce HTML file
$(BUILD_DIR)/%.html: %.php $(PHP_LIBS) | source-dirs
	$(PHP) -f '$<' > '$@'

# Creates directories for compiled HTML fields inside the build dir
source-dirs:
	mkdir -p $(addprefix $(BUILD_DIR)/, $(PHP_SRC_DIRS))

# Removes the build directory
clean:
	rm -rf $(BUILD_DIR)

# Syncs the HTML and other static files to the deployment repo
sync: html
	@echo
	@echo ':: Syncing compiled HTML files'
	rsync $(RSYNC_PARAMS) --include '*.html' '$(BUILD_DIR)/' '$(REPO_PATH)/'
	@echo
	@echo ':: Syncing static content'
	rsync $(RSYNC_PARAMS) '$(STATIC_DIR)/' '$(REPO_PATH)/'

