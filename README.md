# Cavendish Programming Challenge - Laravel
## Overview

We would like you to build a proof-of-concept Restful API using Laravel that functions as a web
directory. A web directory is an online catalogue where various websites are listed, categorized, and
ranked based on user actions.

We expect that you will spend a maximum of 4 hours on this challenge, so please consider:
* using starter kits or libraries such as Sanctum or Passport for a quick solution for
authentication 
* if you struggle for time, focus on the underlying structure (migration, factories, controllers
and their methods, etc) even if that means some of the implementation for those is missing
User Requirements

Please use the following user stories as a list of functional requirements for your application.
There are three tiers of access to this system: users who are not logged in, users who are logged in,
and administrators.

## Unauthenticated User Requirements
* As an unauthenticated user I would like to have the directory’s websites presented to me in
a categorized way, so content is sorted for me.
* As a user I would like to be able to search these websites so that I can quickly find content
that is relevant to me.

## Authenticated User Requirements

* As an authenticated user I would like the ability to log in and log out so that the interactions
I have with the system are identifiable and linked to me.
* As an authenticated user I would like to have the ability to submit my favourite website to
the directory so that others can view them.
* As an authenticated user I would like to vote/unvote my favourite websites and view them
in order of how many votes they have so that the most relevant content is always at the top.

## Admin Requirements

* As an administrator I would like to be able to approve, moderate, and edit website
submissions from users on the system before anyone else can view them so that I can make
sure that content is right and correctly categorized.
* As an administrator I would like to be able to remove websites at any point so that I am in
control of the content of the directory.

## Technical Requirements

The following functional requirements should also be considered in your project:

* A submitted website can belong to multiple categories.
* Users should be able to vote on a website only once.
* Some categories should have several thousand websites.

## What Matters

We will be looking to see if following criteria apply to your code:

* Production-grade - as a rule of thumb, think how you would build this for a production
system and write your code as such.
* Efficient - your database migrations should consider structure, indexing, and optimizations.
* Easy to Integrate with – you should consider how a client would consume this API
(potentially a JavaScript SPA).
* Documented - your code should be easy to follow and understand, with comments where
needed.
* Scalable - show us that your solution still works if it’s under heavy load or it has a lot of data.
eg. Does searching still work when your table has a few million rows? Do the queries still
retrieve what they need to?

# How To Submit

Send a git repo link or a zip/rar archive to liviu.blidar@cavendishconsulting.com containing your
code and instructions on how to run it. If the environment is self-contained (such as with sail), that is
even better.
