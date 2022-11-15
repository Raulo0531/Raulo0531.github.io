<?php
  header('Content-Type: text/x-vcard; charset=utf-8;');
  header('Content-Disposition: attachment; filename=vcard.vcf"');
  echo "BEGIN:VCARD\n";
  echo "VERSION:3.0\n";
  echo "N:My Name\n";
  echo "FN:Yet another Name\n";
  echo "URL:https://www.google.com\n";
  echo "ORG:Organization\n";
  echo "EMAIL:info@google.com\n";
  echo "PHOTO;VALUE#URI;TYPE#JPG:https://www.autobackoffice.com/mv/media/logohp.jpg\n";
  echo "TEL;TYPE=voice:1234567890\n";
  echo "ADR;TYPE#WORK,PREF:;;Long Way Avenue\n";
  echo "REV:2022-01-26T12:13:14Z\n";
  echo "END:VCARD\n";
?>