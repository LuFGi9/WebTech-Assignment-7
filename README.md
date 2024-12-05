# WebTech-Assignment-7

[![Open in Gitpod](https://gitpod.io/button/open-in-gitpod.svg)](https://gitpod.io/#https://github.com/LuFGi9/WebTech-Assignment-7)

Betrachten wir erneut die Hochschulsport-Webseite aus vorigen Übungen. Während die Funktionalitäten zuvor noch mit JavaScript umgesetzt wurden, denken Sie nun darüber nach, was wie mit PHP umgesetzt werden kann. Überlegen Sie außerdem, was besser mit PHP oder JavaScript umgesetzt werden sollte und wieso.

## Aufgabe 1
Setzen wir zunächst die Startseite um. Folgende Anforderungen sollen erfüllt werden:
- Die Startseite sollte sich in der separaten Datei `startseite.php` befinden und in die Hauptseite `index.php` eingebunden werden.
- Der Button zum Abspielen von Videos soll seine Funktion erhalten. Dabei wird aus dem Eingabefeld ein Link ausgelesen (z.B. von einem Youtube-Video).
- Das Video, welches über diesen Link erreichbar ist, soll nun im vorbereiteten `<video>`-Tag angezeigt und abgespielt werden können.
- Die Seite soll um einen weiteren article erweitert werden, in dem eine Liste aller zuvor angezeigten Videos zu sehen ist.
- Die Liste wird bei jedem Button-Click-Event aktualisiert und das neue Video wird hinzugefügt.


## Aufgabe 2
Betrachten wir nun das Kurs-Management:
- Die Buttons zum Abspielen erstellen und löschen von Kursangeboten sollen ihre Funktion erhalten. Zum Erstellen werden Kursname und –beschreibungs ausgelesen, sowie das Passwort gespeichert.
- Der neue Kurs wird der Tabelle hinzugefügt.
- Zum Löschen muss das jeweils richtige Passwort (das, was beim Erstellen angegeben wurde) eingegeben sein, und die Tabellenzeile wird entfernt.


**BONUS**: Achten Sie bei der Umsetzung darauf, Ihre Webseite gegen Angriffe zu sichern und markieren Sie mit Kommentaren, gegen welche Angriffe konkret Sie wo welche Sicherung integriert haben.


# Hilfen zu Apache und Docker
PHP benötigt einen Web-Server zur Ausführung - in diesem Beispiel nutzen wir Apache.

* use the Dockerfile to configure Apache
* optional: use a custom and minimal apache.conf. If you don't do this, the default from workspace-full will be used.
* follow the Apache logs in the Gitpod Terminal View via multitail
* run apache on port 8080

## Terminal Commands to try
* `apachectl start` - start Apache Web Server (it's started automatically on workspace launch)
* `apachectl stop` - stop Apache Web Server
* `gp open /var/log/apache2/access.log` - Open Apache access.log in Gitpod editor
* `gp open /var/log/apache2/error.log` - Open Apache error.log in Gitpod editor
* `multitail /var/log/apache2/access.log -I /var/log/apache2/error.log` - View and follow logs in Terminal

## Try or Contribute
Cloned and adapted from: https://github.com/gitpod-io/apache-example
