# Shopware Test-Setup mit Adminer & Demo-Daten

Dieses Setup beschreibt, wie ich Adminer als Datenbank-Tool und die Shopware-Demo-Daten eingerichtet habe.

---

## 1. Adminer einrichten
- Adminer habe als ZIP-Datei von [https://www.adminer.org](https://www.adminer.org) Runterladen.  
- ZIP entpacken → den Ordner oder die `adminer.php` nach  
  ```
  /public/adminer
  ```
  kopieren.  

### Aufruf im Browser
```
http://localhost:8080/adminer/
```
oder, falls nur eine einzelne Datei vorhanden ist:
```
http://localhost:8080/adminer.php
```

### Standard-Login (Dockware)
- **System**: MySQL  
- **Server**: 127.0.0.1:3306  
- **Benutzer**: root  
- **Passwort**: root  
- **Datenbank**: shopware  

---

## 2. Demo-Daten installieren
Die Shopware-Demo-Daten kommen aus GitHub (Plugin **SwagPlatformDemoData**).

### Schritte:
1. Repo von GitHub als ZIP herunterladen und entpacken.  
2. Den Ordner in `SwagPlatformDemoData` umbenennen.  
3. In mein Projekt kopieren nach:  
   ```
   /custom/plugins/SwagPlatformDemoData
   ```
4. In den Container gehen:
   ```befehl:
   docker exec -it shopware-test-shop-3 befehl:
   ```
5. Plugin registrieren und aktivieren:
   ```befehl:
   php bin/console plugin:refresh
   php bin/console plugin:install --activate SwagPlatformDemoData
   ```
6. Abhängigkeit installieren (einmalig nötig):
   ```befehl:
   composer require --dev shopware/dev-tools
   ```
7. Demo-Daten generieren:
   ```befehl:
   php bin/console framework:demodata
   ```

---

## 3. Kontrolle
- In **Adminer** einloggen und die Tabellen `product`, `customer`, `order` prüfen.  
- Im **Shop-Frontend** sollten die Beispiel-Produkte und Kategorien sichtbar sein.  

---

✅ Mit dieser Anleitung habe ich Adminer und Demo-Daten für Shopware erfolgreich eingerichtet.
