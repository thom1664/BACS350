# Doc Man Project

BACS 350 Project #5 

This PHP application is an app that is integrated into your Brain App.

* bacs350 -- Brain
    * superhero -- Superhero Gallery
    * planner -- Project Planner
    * docman -- Document Manager
        * docs -- Location for documents
        
        
## Doc Man User Experience

DocMan is a PHP app that is a part of The Brain App.

It has a nice UI that lets you create documents in Markdown and display them through the Bluehost web pages.

The opening page of DocMan at **[DocMan app](https://unco-bacs.org/bacs350/docman)**.

This page displays a list of all of the Documents in the system as hyperlinks.

A single PHP page (doc.php) is used to display all of the documents within the system.

Document content is created by producing Markdown files and uploading them to the server.

There is no way for the user to create documents through the web pages.

Hyperlinks to view a specific documents will look like **doc.php?doc=docs/Test.md**.  This will invoke the 
**doc.php** page and pass a **doc variable** with the document file name.


## Custom Stylesheet

Create your own look that applies only to Document Manager App (docman).

* Colors
* Fonts
* Logo
* Header layout


## Requirements

* Work with partner (assigned teammate)
* Build new app to work within brain (bacs350/docman)
* Create a folder for markdown documents (bacs350/docman/docs)
* Commit all changes (at least 5 new commits)
* All pages must validate
* Reviews will be done by producing a Markdown document
* Review your partner's website "look and feel"
* Review your partner's code (using Github repo)
* Work with partner to get changes made
* Review the work to produce (before and after snapshots)
* The top "notes" page will show an Index of hyperlinks
* A "doc.php" will display the selected document

