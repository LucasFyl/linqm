<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  titleFontSize:
    label: SuperTitle font-size (do not change if not advised)
    type: text
    default: 38rem
  btnText:
    label: Button text
    type:  text
  btnLink:
    label: Button link
    type:  text