<?php if(!defined('KIRBY')) exit ?>

title: Gallery
pages:
  template: gallery-item
files: false
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  btnText:
    label: Button text
    type:  text
  btnLink:
    label: Button link
    type:  text