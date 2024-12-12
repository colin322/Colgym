Om het project lokaal uit te voeren, moet je de volgende stappen volgen:

Clone de repository naar je lokale machine/bestanden.

Unzip het beep bestand.

Start daarna Xampp en gebruik MySql. Je kunt daar de database maken voor mijn website. De queries staan in migrations.sql, die kun je vinden in het mapje migrations.

Daarna voer deze commands in de terminal om tailwind te installeren: 
npm install -D tailwindcss
npx tailwindcss init


Als je een verbinding wilt hebben tussen de database en de code, kun je je gegevens invoeren in config.php. Kijk bij config_example.php om te zien hoe het eruit moet zien.

Mijn website:
Mijn website is een fictionele gymwebsite waarbij je kunt aanmelden voor een gym membership. Andere dingen die je ook nog kan doen, zijn gratis proeflessen nemen om te kijken of de gym wat voor jou is. Ook kun je abonnementen kopen van Comfort tot All-In. Als je een member bent, kun je je ook aanmelden voor evenementen. Deze evenementen kun je bekijken op de evenementenpagina.

Je hebt twee verschillende admins. Een admin is gewoon een member van de gym en de andere is een superadmin. Als member kun je je gegevens wijzigen en je aanmelden voor evenementen. Als superadmin kun je aanmeldingen bekijken, evenementen toevoegen/verwijderen en eventueel de ledenlijst bekijken.

Als je de superadmin account in wilt, kun je deze gegevens gebruiken om in te loggen:
Email: pieter@gmail.com
Wachtwoord:test

Als je een member account wilt gebruiken, kun je deze gegevens gebruiken:
Email: test@email.com
Wachtwoord: test