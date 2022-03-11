-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 jan 2022 om 14:26
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthone`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `catagories`
--

CREATE TABLE `catagories` (
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `catagories`
--

INSERT INTO `catagories` (`name`, `image`, `id`) VALUES
('roeitrainer', '/img/categories/roeitrainer.jpg', 1),
('hometrainer', '/img/categories/hometrainer.jpg', 2),
('crosstrainer', '/img/categories/crosstrainer.jpg', 3),
('loopband', '/img/categories/loopband.jpg', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `opening_times`
--

CREATE TABLE `opening_times` (
  `opening_time` varchar(10) NOT NULL,
  `day` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `closing_time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `opening_times`
--

INSERT INTO `opening_times` (`opening_time`, `day`, `id`, `closing_time`) VALUES
('7:00', 'Maandag', 1, '20:00'),
('8:00', 'Dinsdag', 2, '20:00'),
('7:00', 'Woensdag', 3, '20:00'),
('8:00', 'Donderdag', 4, '20:00'),
('7:00', 'Vrijdag', 5, '20:30'),
('8:00', 'Zaterdag', 6, '13:00'),
('8:00', 'Zondag', 7, '13:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `categoryid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`categoryid`, `image`, `id`, `name`, `description`) VALUES
(3, 'cr1.jpg', 1, 'Healthone Elite FDR 2.4i Ergometer Crosstrainer', 'Onder andere door de vele trainingsprogramma’s, de koppeling met apps en het vloeiende weerstandssysteem, biedt de Healthone Elite FDR 2.4i Ergometer Crosstrainer jou een intensieve, uitdagende, maar tegelijkertijd een comfortabele workout!\nDeze crosstrainer beschikt over een zwaar vliegwiel die in combinatie met de staplengte van 51 cm ervoor zorgt dat jouw training soepel verloopt.'),
(3, 'cr2.jpg', 2, 'Healthone FDR 2.0i Crosstrainer', 'De Healthone FDR2.0i Crosstrainer is de ideale crosstrainer voor de echte thuissporter. Hij is stil in gebruik en biedt je een stabiele training. Hij beschikt voer een V-snaar zodat je het apparaat op ieder gewenst moment kan gebruiken zonder dat de onderburen of huisgenoten er last van hebben. Daarnaast zit het vliegwiel aan de voorkant wat ervoor zorgt dat de training zeer comfortabel en stabiel aanvoelt.'),
(3, 'cr3.jpg', 3, 'Healthone CTR 3.0i Ergometer Crosstrainer', 'Met de Healthone CTR 3.0i Crosstrainer train je je gehele lichaam zoals je benen, core en armen. En dat op een fijne en soepele manier. Met 18 verschillende trainingsprogramma en 32 weerstandsniveaus zet je iedere keer net een stapje extra. Je trainingsgegevens zie je terug op het ultramoderne LCD display met back light verlicht en bluetooth.'),
(3, 'cr4.jpg', 4, 'Healthone Console Total Fit Ergometer Crosstrainer', 'De Healthone iConsole Total Fit Crosstrainer geeft je een natuurlijk gevoel met een ergonomische elliptische stapbeweging. De zware 22 kg roterende massa daagt je uit om te trainen op hoge intensiteit en zorgt tevens voor een soepele beweging. De grote anti-slip pedalen zijn verstelbaar zodat je altijd de juiste houding hebt. Hij is belastbaar tot 150 kg, wat ook aangeeft dat hij goed bestand is tegen intensieve oefeningen. De 52,6 kg zware crosstrainer kun je waterpas stellen wanneer je op een ongelijke vloer staat.'),
(3, 'cr5.jpg', 5, 'Healthone iConsole CTR 2.1 Ergometer Crosstrainer', 'Haal de beste prestaties uit jezelf met de Healthone iConsole CTR 2.1 Ergometer Crosstrainer. De crosstrainer bestaat uit materialen van de hoogste kwaliteit. Het is stevig, tot 150 kg belastbaar en lang bruikbaar. De bewegingen van het apparaat zijn ook betrouwbaar. Met lagers op ieder draaipunt, een beweging die soepel loopt en een weerstand die zeer precies is in te stellen. De weerstanden zijn in te stellen op 32 verschillende niveau’s en op een wattage tussen de 10 en 350 Watt. '),
(3, 'cr6.jpg', 6, 'Healthone Elite FDR 2.5i Semi-Pro Crosstrainer', 'De Healthone Elite FDR 2.5i Crosstrainer heeft alles in huis om optimaal te trainen. De roterende massa van 36 kg zorgt voor een prettige en vloeiende beweging. De FDR heeft een dubbele geleiding wat zorgt voor een stabiele en stille training. De wielen die over deze dubbele geleiding voortbewegen zijn slijtvast en gelagerd waardoor ze onderhoudsvrij zijn.'),
(4, 'lb1.jpg', 7, 'Healthone elite comfort loopband', 'De Healthone Elite Comfort Loopband is een prachtexemplaar uit de VirtuFit collectie. Deze loopband is gemaakt van kwaliteitsmaterialen en de onderhoud is dan ook vrij nihil. De loopband is opklapbaar, heeft transportwielen en heeft een gepatenteerd 3S dempingsysteem. Dit maakt je training comfortabel en is vriendelijk voor je gewrichten.'),
(4, 'lb2.jpg', 8, 'Healthone elite smart touch loopband', 'De Healthone Elite Smart Touch Loopband is een loopband uit het hogere segment. De loopband is gemaakt van hoge kwaliteit en heeft uitgebreide smart functies wat deze loopband een zeer gevarieerd en duurzaam fitnessapparaat maakt.'),
(4, 'lb3.jpg', 9, 'Healthone elite hiit running loopband ', 'De Healthone Pro Elite Hiit Running is de loopband zonder maximum snelheid. Dit komt omdat deze loopband geen motor heeft, maar de snelheid wordt bepaald door hoe hard je loopt. Hij heeft 4 weerstanden, die bepaalt hoe gemakkelijk de band mee geeft met je voetstappen. Op deze loopband gebruik je meer spiergroepen en verbrand je meer calorieën dan een gemotoriseerde loopband. '),
(4, 'lb4.jpg', 10, 'Healthone run fit foldable loopband', 'De Healthone Run Fit Foldable Loopband is een “must” wanneer het gaat om compactheid, stabiliteit en gebruikersgemak! Met deze loopband haal je een snelheid van 14 km/u en kun je maar liefst tussen 40 verschillende trainingsprogramma’s kiezen. Daarnaast zullen je onderburen en/of huisgenoten geen geluidsoverlast hebben van jouw intensieve trainingen!'),
(4, 'lb5.jpg', 11, 'Healthone elite tr-5001 loopband', 'De Healthone Elite TR-500i Loopband is geschikt voor serieuze hardlopers. Door de vele extra’s kan deze loopband meer dan een doorsnee loopband. De VirtuFit TR-500i heeft een stille motor met een vermogen van 3 pk met een piekvermogen van 6 pk.'),
(4, 'lb6.jpg', 12, 'Healthone tr-2001 loopband', 'De Healthone TR-200i loopband is bedoelt voor iedereen, of je nu net begonnen bent met hardlopen of al een tijdje bezig bent. De 75 kg loopband bestaat uit kwaliteitsmaterialen en is zeer stabiel. Ook is deze loopband zo veilig mogelijk ontworpen.'),
(2, 'ht1.jpg', 13, 'Healthone low entry hometrainer 1.21', 'de Healthone Low Entry Bike 1.2i is een kwalitatieve hometrainer met een lage instap voor een lage prijs. Hij heeft een sterk en stabiel frame waardoor de hometrainer voor iedereen toegankelijk is. Het sterke frame weeg 22,6 kg en is makkelijk verplaatsbaar door de ingebouwde transportwielen.'),
(2, 'ht2.jpg', 14, 'Healthone low entry hometrainer 1.1', 'de Healthone Low Entry Bike 1.1 is een kwalitatieve hometrainer met een lage instap voor een lage prijs. Hij heeft een sterk en stabiel frame waardoor de hometrainer voor iedereen toegankelijk is. Het sterke frame weeg 22,6 kg en is makkelijk verplaatsbaar door de ingebouwde transportwielen.'),
(2, 'ht3.jpg', 15, 'Healthone htr 3.01 ergometer hometrainer', 'Haal op een leuke manier het allerbeste uit jezelf met de Healthone HTR 3.0i Ergometer Hometrainer. De hometrainer is gemaakt van uitstekende kwaliteit, voorzien van maar liefst 36 programma’s, koppelbaar met de fitnessapp Zwift en heeft nog veel meer functionaliteiten.'),
(2, 'ht4.jpg', 16, 'Healthone iconsole+htr 2.1 ergometer hometrainer', 'De Healthone iConsole+ HTR 2.1 Ergometer Hometrainer is gemaakt van versterkte materialen waardoor de fiets stevig, stabiel en comfortabel is. Dit zorgt voor een lange levensduur van de hometrainer en een belastbaar gewicht van 150 kg. De industriële kogellagers zorgen samen met de magnetische weerstand dat hij vloeiend trapt.'),
(2, 'ht5.jpg', 17, 'Healthone htr 2.0 ergometer hometrainer', 'Met de Healthone HTR 2.0 Ergometer Hometrainer kun je ideale cardio oefening uitvoeren. Hij is uitermate geschikt voor “low intensity” training. Dit wil zeggen dat je rustiger traint, maar langer volhoudt. Zo ontwikkel je minder kracht, maar verbeter je juist het uithoudingsvermogen en verbrand je meer vet.'),
(2, 'ht6.jpg', 18, 'Healthone easy fit hometrainer', 'De Healthone Easy Fit Hometrainer biedt alles wat je mag verwachten van een goede hometrainer, gehuld in een stoer mat zwart design. Door de hoge kwaliteit, de gebruiksvriendelijkheid en de 8 verschillende weerstandsniveaus is de Easy Fit hometrainer een fitnessapparaat die je zeker helpt bij het behalen van je fitnessdoelen. '),
(1, 'rt1.jpg', 19, 'Healthone Water Resistance Row 800 Roeitrainer', 'De Healthone Water Resistance Row 800 Roeitrainer heeft een uniek ontwerp omdat de watertank onder de zitting zit waardoor deze roeitrainer een stuk compacter is. Hierdoor is de zithoogte ook wat hoger waardoor je makkelijk op en af kunt stappen, de zitting van deze sterke constructie zit namelijk op 50 cm van de grond. Daarnaast is de zitting zelf extra groot en comfortabel wat goed is voor stevige en prettige zitpositie'),
(1, 'rt2.jpg', 20, 'Healthone Foldable Water Resistance Row 900 Roeitrainer', 'Met de Healthone Foldable Water Resistance Row 900 Roeitrainer kun je binnen dezelfde roeiervaring krijgen als buiten op het water. De Row 900 reageert op je roeislagen alsof je buiten in een roeiboot over het water vaart. Dit komt door de waterweerstand. Het rad dat door de watertank draait geeft je dezelfde tegenkracht als een roeispaan die door het water beweegt. Water werkt namelijk progressief; hoe sneller je gaat hoe meer weerstand het oplevert. '),
(1, 'rt3.jpg', 21, 'Healthone Water Resistance Row 1000 Roeitrainer', 'Met de Healthone Water Resistance Row 1000 Roeitraner heb je een goede roeitrainer met realistische dynamiek van het echte roeien. De Row 1000 is één van de sterkste water roeitrainers uit zijn klasse. Het belastbaar gewicht van 227 kg zit aan de top van de markt, ver boven veel apparaten uit de duurste prijsklasse en ver boven wat de meeste gebruikers nodig hebben.'),
(1, 'rt4.jpg', 22, 'Healthone Ultimate Pro 2i Ergometer Roeitrainer Bluetooth/ANT', 'Met de Healthone Ultimate Pro 2i Ergometer Roeitrainer haal je voor een scherpe prijs, sportschool kwaliteit in huis. Wanneer je dit apparaat ziet zul je denken dat het een normale roeitrainer is, maar het gebruik ervan zal je verbazen! De roeitrainer heeft namelijk een gewicht van maar liefst 50 kg en dit komt doordat deze Ultimate Pro ontworpen is met de beste materialen. Hij bevat namelijk meer staal dan andere roeitrainers. Niet alleen in het frame maar ook in bijvoorbeeld de massieve roestvrijstalen ketting.'),
(1, 'rt5.jpg', 23, 'Healthone Ultimate Pro 2 Ergometer Roeitrainer', 'Met de Healthone Ultimate Pro 2 Ergometer Roeitrainer haal je voor een scherpe prijs, sportschool kwaliteit in huis. Wanneer je dit apparaat ziet zal je denken dat het een normale roeitrainer is, maar het gebruik ervan zal je verbazen! De roeitrainer heeft namelijk een gewicht van maar liefst 50 kg en dit komt doordat deze Ultimate Pro ontworpen is met de beste materialen. Hij bevat namelijk meer staal dan andere roeitrainers.'),
(1, 'rt6.jpg', 24, 'Healthone Row 600i Opvouwbare Roeitrainer', 'Verbeter je conditie, verbrandt calorieën, wordt fitter, krijg meer energie en versterk de kern van je spieren met de Healthone Row 600i opvouwbare Roeitrainer. De rails heeft een helling van 15% waardoor je altijd iets onder het ergonomische PU zadel zit. Dit zorgt voor een realistische roeibeweging. Wanneer je roeit, glijdt het zadel geruisloos en soepel over de aluminium rails door de goede kogellagers onder het zadel.');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `descrption` text NOT NULL,
  `date` date NOT NULL,
  `stars` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `review`
--

INSERT INTO `review` (`id`, `name`, `descrption`, `date`, `stars`, `product_id`, `user_id`) VALUES
(5, 'test', 'test', '2022-01-15', 4, 19, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `times`
--

CREATE TABLE `times` (
  `opening_time` time NOT NULL,
  `day` varchar(10) NOT NULL,
  `id` int(11) NOT NULL,
  `closing_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `times`
--

INSERT INTO `times` (`opening_time`, `day`, `id`, `closing_time`) VALUES
('07:00:00', 'Maandag', 1, '20:00:00'),
('08:00:00', 'Dinsdag', 2, '20:00:00'),
('07:00:00', 'Woensdag', 3, '20:00:00'),
('08:00:00', 'Donderdag', 4, '20:00:00'),
('07:00:00', 'Vrijdag', 5, '20:30:00'),
('08:00:00', 'Zaterdag', 6, '13:00:00'),
('08:00:00', 'Zondag', 7, '13:00:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `role` enum('member','admin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `first_name`, `last_name`, `role`) VALUES
(1, 'j.vdv@outlook.com', 'root', 'Jona', 'van der Vlist', 'admin'),
(2, 'test', 'test', 'test', 'test', 'member');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `opening_times`
--
ALTER TABLE `opening_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `catagoryid` (`categoryid`);

--
-- Indexen voor tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk1` (`product_id`),
  ADD KEY `fk2` (`user_id`);

--
-- Indexen voor tabel `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `opening_times`
--
ALTER TABLE `opening_times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `times`
--
ALTER TABLE `times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `catagories` (`id`);

--
-- Beperkingen voor tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fk2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
