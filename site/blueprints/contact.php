<?php if(!defined('KIRBY')) exit ?>

title: Contact
pages: false
files: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  phone:
    label: Phone
    type: tel
    width: 1/2
  email:
    label: Email
    type: email
    width: 1/2
  details:
    label: Contact details
    type:  textarea