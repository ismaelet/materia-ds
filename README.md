# Materia DS

A legacy PHP website with a custom content management system for managing website pages, projects, images, and content.

## Overview

The project includes a public-facing website and a dedicated administration interface.

The administration system provides functionality for:

- Managing projects and associated images
- Editing website sections and text content
- Managing categories and configuration variables
- Updating website settings
- Administrative authentication and access control

## Technology Stack

- PHP
- JavaScript
- CSS
- Apache with `.htaccess` configuration

The project uses a custom PHP architecture rather than a framework-managed application structure.

## Project Structure

```text
materia-ds/
├── admin/       # Administration interface
├── app/         # Application configuration and logic
├── pages/       # Public website pages
├── system/      # Shared application infrastructure
├── uploads/     # Uploaded assets
├── .htaccess    # Apache configuration
└── index.php    # Application entry point