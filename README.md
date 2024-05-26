# we_ride_at_dawn
 Dokumentation – IM4 

Anhand einer Sonnenaufgang-Untergang API haben wir eine Webseite programmiert, die die 
nördlichsten, westlichsten, südlichsten und östlichsten Städten Europas aufzeigen und je 
nach Wochentag die entsprechenden Sonnenaufgänge- und Untergänge aufzeigt, dazu 
genügt ein einfaches Klicken auf das Dropdown-Menü und des Kalenders. Die Website ist in 
einem sehr schlichten Stil gehalten, und dient als Informationsquelle für Interessierte in ganz 
Europa, besonders bei Jahreszeiten wo die Tage entweder länger oder kürzer werden. 

Design – Vorgang 
Als erstens haben wir uns zusammengeschlossen und ausgetauscht, wie unsere Webseite 
schlussendlich aussehen sollte. Wir waren schnell der Meinung, dass die Webseite schlicht, 
basic und die nötigsten Informationen beinhalten sollte. Da kommt Figma und Adobe 
Illustrator ins Spiel, da das UX-Design auf Figma erstellt wurde, und die Hintergrundbilder auf 
Adobe Illustrator. 

Backend - Prozess 
Als wir in der Schule den Etl-Prozess an dem Beispiel der Wetter-API angeschaut haben, ging 
es mit der Zeit gut, den Code dementsprechend anzupassen. Anfangs war es aber schwer, ihn 
zu verstehen. Den Code hatten wir danach, doch machten einen Denkfehler. Wir 
programmierten die Website erst so, dass man auch im Frontend die API nutzt und nicht 
unsere Datenbank. Das hat sogar irgendwie funktioniert und wir merkten, dass wir das 
Prinzip einer API verstanden haben, auch wenn es erst falsch eingebettet wurde. Mithilfe von 
Beni und ChatGPT setzten wir den Prozess nochmals neu auf, sodass alles richtig in die 
Datenbank geladen wird. Das Problem: der Server war überfordert und wir konnten nur je 
zwei Monate von jeder Stadt nach und nach in die Datenbank laden. Nachdem wir das 
hatten, kam der Unload-Prozess dran und der war am schwersten. Auch hier arbeiteten wir 
mit ChatGPT, Copilot und der Hilfe von Schulkollegen, sodass es nach einem halben Tag lief. 
Den ganzen Code machten wir also mit ChatGPT und Copilot und prompten aber sehr exakte 
Befehle, damit wir das gewünschte Resultat schneller erhielten. Mit der Zeit, weil wir den 
Code ziemlich oft durchkauten und von ChatGPT anpassen liessen, konnten wir ihn bald 
selbst bei kleineren Problemen anpassen (z.B nur je zwei Monate in die Datenbank laden). 
Dadurch wuchs unser Verständnis für den Code. Unser Js-Script prompteten wir einmal und 
es hat funktioniert, da waren wir selbst erstaunt drüber, aber das sparte uns einiges an Zeit. 

Front-End 
Vanessa hat sich am meisten mit dem Front-End beschäftigt und sich jegliche Mühe gegeben, 
die Webseite so passend und genau wie das Figma-File zu coden. Dabei war es für sie und 
Sina, die für das Back-End zuständig war, sehr wichtig auf welchen Dateien sie arbeiten und 
welche nicht überarbeitet dürfen. Da ist eine klare Kommunikation das A und O in einem 
Projekt. 

Learnings 
Wir haben gelernt, wie wichtig es doch ist, sich nicht nur auf die künstliche Intelligenz zu 
vertrauen. Es ist ebenso wichtig, dass man die Grundprinzipien der jeweiligen 
Programmiersprachen kennt und Basic Codes auch versteht. Je besser wir unseren Code 
verstanden, desto genauer konnten wir unsere Probleme an Chatgpt schildern, welcher uns 
dann genauere Angaben und Anpassungen zuschickte. 

Schwierigkeiten 
Die Schwierigkeiten dabei war es erstmals, sich mit den Programmiersprachen wie PHP 
zurechtzukommen, da vieles wie die API noch für uns Neuland war. Ausserdem hatten wir 
Schwierigkeiten, wie wir die Daten mithilfe der API abfangen können, glücklicherweise hatten 
wir Coachingtermine, Schulfreunde und unser grösster Freund im Studium ChatGPT, die uns 
enorm weiterhalfen. Im Endschluss verbrachten wir eines grossen Teils, die Webseite 
responsiv zu gestalten, merkten aber nach einer Zeit, dass wir die Prioritäten erstmals auf 
den API-Vorgang legen sollen. 

Benutzte Ressourcen: - - - - - - 
GitHub 
ChatGPT 
CoPilot 
Google 
Hilfe von Dozierenden und Schulfreunden 
Youtube 
