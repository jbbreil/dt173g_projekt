# Webbutveckling III

### av Gianluca Incandela giin1900@student.miun.se

## Webbplats

Tredje fas av webbplatsprojekt här ligger alla utvecklings-filer, vilket inkluderad Gulp-konfiguration, REST-webbtjänst, Fetch API, Javascript-, PHP- och SASS-filer. 

### 1 Installera XAMPP lokal server:

https://www.apachefriends.org/index.html

### 2.1 Sätt upp databasen via SQL-fråga:

1.Skapa en ny databas kallad: bdtest.

2.Skicka nedliggande SQL-fråga till databasen: 

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `code` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `progression` varchar(64) NOT NULL,
  `syllabus` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `courses` (`id`, `code`, `name`, `progression`, `syllabus`) VALUES
(2, 'DT084G', 'Introduktion till programmering med JavaScript', 'A', 'https://www.miun.se\\/utbildning\\/kursplaner-och-utbildningsplaner\\/Sok-kursplan\\/kursplan\\/?kursplanid=21877'),
(3, 'DT163G', 'Digital bildbehandling webb', 'A', 'https://www.miun.se\\/utbildning\\/kursplaner-och-utbildningsplaner\\/Sok-kursplan\\/kursplan\\/?kursplanid=21898'),
(4, 'DT003G', 'Databaser', 'A', 'https://www.miun.se\\/utbildning\\/kursplaner-och-utbildningsplaner\\/Sok-kursplan\\/kursplan\\/?kursplanid=21595'),
(5, 'GD008G', 'Typografi och form', 'A', 'https://www.miun.se\\/utbildning\\/kursplaner-och-utbildningsplaner\\/Sok-kursplan\\/kursplan\\/?kursplanid=21669'),
(6, 'DT093G', 'Webbutveckling II', 'B', 'https://www.miun.se\\/utbildning\\/kursplaner-och-utbildningsplaner\\/Sok-kursplan\\/kursplan\\/?kursplanid=21874'),
(7, 'DT068G', 'Webbanvandbarhet', 'B', 'https://www.miun.se\\/utbildning\\/kursplaner-och-utbildningsplaner\\/Sok-kursplan\\/kursplan\\/?kursplanid=19699'),
(8, 'DT152G', 'Webbdesign CMS', 'B', 'https://www.miun.se\\/utbildning\\/kursplaner-och-utbildningsplaner\\/Sok-kursplan\\/kursplan\\/?kursplanid=21872'),
(9, 'DT173G', 'Webbutveckling III', 'B', 'https://www.miun.se\\/utbildning\\/kursplaner-och-utbildningsplaner\\/Sok-kursplan\\/kursplan\\/?kursplanid=21873'),
(10, 'IK060G', 'Projektledning', 'A', 'https://www.miun.se/utbildning/kursplaner-och-utbildningsplaner/Sok-kursplan/kursplan/?kursplanid=18594');

CREATE TABLE `work` (
  `id` int(11) NOT NULL,
  `date` varchar(64) NOT NULL,
  `company` varchar(64) NOT NULL,
  `title` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `work` (`id`, `date`, `company`, `title`) VALUES
(1, 'Sep 2016 - Sep 2018', 'Freelance', 'Webbdesigner | Webbutvecklare'),
(2, 'Dec 2015 - Aug 2016', 'Klarna', 'Webb designer | Webbutvecklare'),
(3, 'Jan 2015 - Dec 2015', 'Ericsson', 'APP Designer'),
(4, 'Sep 2013 - Dec 2014', 'Comviq', 'IT-tekniker'),
(5, 'Aug 2012 - Dec 2012', 'Informalia ', 'Datortekniker'),
(6, 'Maj 2010 - Dec 2013', 'McDonald´s ', 'Restaurangmedarbetare');

ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `work`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

ALTER TABLE `work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

### 2.2 Skapa databas användernamn:
   HOST: localhost
   USER: dbtest
   PAASWORD: password
   DATABASE: dbtest

### 3. Klona projekt i htdocs-mappen (C:->xampp->htdocs):

git clone https://github.com/jbbreil/WEBSITE-GIT.git

### 4. Initialisering konsol kommando:

1. npm install --save --dev

2. gulp


## OBS! Manuelt webbplatsprojekts hemsida om gulp-filen inte öppnar det automatiskt.

http://localhost/WEBSITE-GIT/pub/index.php

