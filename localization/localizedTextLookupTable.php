<?php
/**
 * This is the lookup table used to give the user the correct
 * translation. English strings are keys in the array, and point
 * to arrays themselves were language codes are keys. English is NOT
 * stored in these arrays, since that would mean they are stored twice.
 * 
 * Strings must contain zero heading och leading whitespace
 * 
 * Example with three languages
 * 
 * array(
 * "Example text"=> array(
 *      "sv"=>"Exempeltext",
 *      "de"=>"Beispieltext",   // All items must have trailing ,
 *  ),
 * )
 * 
 * To add localization for your language, simply add translations
 * in this file, add the case in getLocalizedText.php and add
 * language option in index.php
 * 
 * Add text under the correct comment (first time it appears in a file)
 * 
 * CHANGING ENGLISH TEXT REQUIRES CHANGE IN SOURCE FILES AS WELL
 */
define("LOCALIZED_TEXT_LOOKUP_TABLE", array(
    // index.php
    "E-vote - Your digital voting system"=>array(
        "sv"=>"E-vote - Ditt digitala röstsystem",
        "it"=>"E-vote - Il tuo sistema di voto elettronico",
    ),
    "Voting page"=>array(
        "sv"=>"Röstningssida",
        "it"=>"Pagina di voto",
    ),
    "Log in"=>array(
        "sv"=>"Logga in",
        "it"=>"Connessione",
    ),
    "Log out"=>array(
        "sv"=>"Logga ut",
        "it"=>"Esci",
    ),
    "Election admin"=>array(
        "sv"=>"Valansvarig",
        "it"=>"Amministratore Elezioni",
    ),
    "Adjuster"=>array(
        "sv"=>"Justerare",
        "it"=>"Scrutatore"
    ),
    "Manage users"=>array(
        "sv"=>"Hantera användare",
        "it"=>"Gestisci Utenti",
    ),
    "Administrator"=>array(
        "sv"=>"Administratör",
        "it"=>"Amministratore",
    ),
    "E-vote must be configured"=>array(
        "sv"=>"E-vote måste konfigureras",
        "it"=>"E-vote deve essere configurato",
    ),
    // Footer
    "Created by Informationsutskottet at E-sektionen at TLTH"=>array(
        "sv"=>"Skapad av Informationsutskottet inom E-sektionen inom TLTH",
        "it"=>"Created by Informationsutskottet",
    ),
    "E-vote is open and free software licensed under MPL-2.0. Source code can be found at"=>array(
        "sv"=>"E-vote är öppen och fri mjukvara licenserad under MPL-2.0. Källkod hittas på",
        "it"=>"E-vote is open and free software licensed under MPL-2.0. Source code can be found at",
    ),
    // install/setup.php
    "E-vote Setup"=>array(
        "sv"=>"E-vote Setup",
        "it"=>"E-vote Setup",
    ),
    "Configuration successfull!"=>array(
        "sv"=>"Konfigurationen lyckades!",
        "it"=>"Configurazione completata",
    ),
    "An user with that name already exists in the database."=>array(
        "sv"=>"En avändare med det namnet fanns redan i databasen.",
        "it"=>"Un utente con questo nome esiste già nel database",
    ),
    "The passwords for superuser does not match. Try again."=>array(
        "sv"=>"Lösenorden för superuser stämmer inte överens. Försök igen.",
        "it"=>"La password per supeuser non è corretta. Prova di nuovo.",
    ),
    "All fields not filled in"=>array(
        "sv"=>"Alla fällt är inte ifyllda.",
        "it"=>"Non sono stati riempiti tutti i campi",
    ),
    // install/setup.php: Actual HTML seen by user
    "Hi! How fun that you want to start using E-vote.\n
    <br>\n
    <br> Fill out the form according to your setup to configure.\n
    <br> Make sure to put in the correct values so they don't have to be changed manually afterwards."=>array(
        "sv"=>"Hej! Vad kul att just ni vill börja använda E-vote.\n
        <br>\n
        <br> Fyll i datan som gäller för ditt system nedan för att konfigurera.\n
        <br> Se till att skriva in rätt värden för att inte behöva ändra dessa manuelt efteråt.",
        "it"=>"Salve. Ci fa piacere che tu stia iniziando ad usare E-Vote\n
        <br>\n
        <br> Compila la form in conformità del tuo ambiente per configurare il software.\n
        <br> Attenzione ad inserire i valori corretti in modo che non sia necessario modificarli manualmente in seguito.",        
    ),
    "Database configuration"=>array(
        "sv"=>"Databaskonfiguration",
        "it"=>"Configurazione database",
    ),
    "Host:"=>array(
        "sv"=>"Host:",
        "it"=>"Host:",
    ),
    "Database name:"=>array(
        "sv"=>"Databasnamn:",
        "it"=>"Nome Database:",
    ),
    "User:"=>array(
        "sv"=>"Användare:",
        "it"=>"Utente:",
    ),
    "Password:"=>array(
        "sv"=>"Lösenord:",
        "it"=>"Password:",
    ),
    "This is the user that has full control of the system. This user can't be deleted from the database."=>array(
        "sv"=>"Detta är användaren som har full kontrol på systemet. Denna användare kan inte raderas från databasen.",
        "it"=>"Questo è l'utente che avrà il pieno controllo del sistema. Questo utente non potrà essere eliminato",
    ),
    "Name:"=>array(
        "sv"=>"Namn:",
        "it"=>"Nome:",
    ),
    "Repeat password:"=>array(
        "sv"=>"Upprepa lösenord:",
        "it"=>"Reinserisci password:",
    ),
    "E-vote is configured!"=>array(
        "sv"=>"E-vote är konfigurerat!",
        "it"=>"E-vote è configurato",
    ),
    // index/clear.php
    "Close current election"=>array(
        "sv"=>"Stäng nuvarande val",
        "it"=>"Chiudi elezioni in corso",
    ),
    "Your password:"=>array(
        "sv"=>"Ditt lösenord:",
        "it"=>"La tua password:",
    ),
    "Delete election"=>array(
        "sv"=>"Radera val",
        "it"=>"Cancella elezioni",
    ),
    // No permission
    "You don't have permission to view this page."=>array(
        "sv"=>"Du har inte behörighet att visa denna sida.",
        "it"=>"Non hai permessi sufficienti per vedere questa pagina.",
    ),
    // install/vote/front.php
    "There is currently no election session."=>array(
        "sv"=>"Det finns inget pågående val för tillfället.",
        "it"=>"Non è presente nessuna sessione elezioni.",
    ),
    "Checking for new election round in"=>array(
        "sv"=>"Kollar efter ny omröstning om",
        "it"=>"Controllo nuova sessione elezioni",
    ),
    "Oops! Could not check for new election round. Try refreshing the page!"=>array(
        "sv"=>"Hoppsan! Kunde inte kolla efter ny omröstning. Testa att ladda om sidan!",
        "it"=>"Faen! Kunde ente se om de fanns en ny omröestning. Testa ladda om sijdan!",
    ),
    "Refresh Page"=>array(
        "sv"=>"Ladda om sidan",
        "it"=>"Ladda om sijdan",
    ),
    "There is nothing to vote on currently. Take a cookie."=>array(
        "sv"=>"Det finns inget att rösta på för tillfället. Ta en kaka.",
        "it"=>"Attualmente non vi sono elezioni in corso."
    ),
    "Voting in progress"=>array(
        "sv"=>"Röstning pågår",
        "it"=>"Votazione in corso",
    ),
    // These two are a bit iffy, since we need to insert a number in the middle.
    // Check the source file for help how to do this properly in your language
    "You can vote on <b>"=>array(
        "sv"=>"Du får rösta på <b>",
        "it"=>"Puoi votare su una <b>",
    ),
    "</b> of the alternatives"=>array(
        "sv"=>"</b> av alternativen",
        "it"=>"</b> delle seguenti alternative.",
    ),
    // end of iffy things (for now)
    "Personal code:"=>array(
        "sv"=>"Personlig valkod:",
        "it"=>"Codice personale:",
    ),
    "Temporary code:"=>array(
        "sv"=>"Tillfällig valkod:",
        "it"=>"Codice temporaneo:",
    ),
    "Vote!"=>array(
        "sv"=>"Rösta!",
        "it"=>"Votare",
    ),
    // index/useradmin/useradminpanel.php
    "Choose"=>array(
        "sv"=>"Välj",
        "it"=>"Scelta",
    ),
    "Name"=>array(
        "sv"=>"Namn",
        "it"=>"Nome",
    ),
    "Privileges"=>array(
        "sv"=>"Privilegier",
        "it"=>"Diritti",
    ),
    "Remove selected users"=>array(
        "sv"=>"Ta bort markerade användare",
        "it"=>"Elimina l'utente selezionato",
    ),
    // index/useradmin/newuser.php
    "Create new user"=>array(
        "sv"=>"Skapa ny användare",
        "it"=>"Crea nuovo utente",
    ),
    "Username:"=>array(
        "sv"=>"Användarnamn:",
        "it"=>"Utente:",
    ),
    "Privileges:"=>array(
        "sv"=>"Privilegier:",
        "it"=>"Diritti:",
    ),
    // index/useradmin/changepassword.php
    "Change password"=>array(
        "sv"=>"Ändra lösenord",
        "it"=>"Modifica password",
    ),
    "New password:"=>array(
        "sv"=>"Nytt lösenord:",
        "it"=>"Nuova password:",
    ),
    "Are you sure you want to log out?"=>array(
        "sv"=>"Är du säker på att du vill logga ut?",
        "it"=>"Conferma disconnessione",
    ),
    // index/electionadmin/electionadminpanel.php
    "Some shady character has done something with the database."=>array(
        "sv"=>"Någon fuling har mixtrat i databasen.",
        "it"=>"Alcuni caratteri sospetti hanno causato problemi al database",
    ),
    "There is no ongoing election session."=>array(
        "sv"=>"Det pågår inget valtillfälle.",
        "it"=>"Non ci sono elezioni programmate",
    ),
    "Create new election round"=>array(
        "sv"=>"Skapa ny valomgång",
        "it"=>"Creare nuova sessione elezioni",
    ),
    "What to be elected:"=>array(
        "sv"=>"Vad som ska väljas:",
        "it"=>"Oggetto dell'elezione:",
    ),
    "Number of selectable options:"=>array(
        "sv"=>"Antal valbara alternativ:",
        "it"=>"Numero di opzioni selezionabili:",
    ),
    "Alternatives:"=>array(
        "sv"=>"Alternativ:",
        "it"=>"Alternative:",
    ),
    "Increase/decrease number of fields:"=>array(
        "sv"=>"Öka/minska antalet fält:",
        "it"=>"Aumenta diminuisci numero di campi:",
    ),
    "Start new election round"=>array(
        "sv"=>"Starta ny valomgång",
        "it"=>"Inizia nuova sessione elezioni",
    ),
    "Previous election round"=>array(
        "sv"=>"Föregående valomgång",
        "it"=>"Precedente sessione elettorale",
    ),
    "End election round"=>array(
        "sv"=>"Avsluta valomgång",
        "it"=>"Fine sessione elettorale",
    ),
    // index/classes/TableGenerator.php
    "votes"=>array(
        "sv"=>"röster",
        "it"=>"voti"
    ),
    "opt."=>array(
        "sv"=>"alt.",
        "it"=>"opz.",
    ),
    "Number of failed voting attempts:"=>array(
        "sv"=>"Antal misslyckade röstningsförsök",
        "it"=>"Tentativi di voto falliti:",
    ),
    "Relationship between total votes accepted and failed voting attempts (lower is better):"=>array(
        "sv"=>"Förhållande mellan totalt antal accepterade röster och misslyckade röstningsförsök (lägre är bättre):",
        "it"=>"Rapporto tra il totale dei voti accettati e falliti (minore è meglio):",
    ),	 
    "Nothing has been elected yet"=>array(
        "sv"=>"Ingenting har valts ännu",
        "it"=>"Le votazioni sono in attesa di risultato",
    ),
    "No election opportunity in sight"=>array(
        "sv"=>"Inget valtillfälle i sikte",
        "it"=>"Al momento non sono previste votazioni",
    ),
    "Opened"=>array(
        "sv"=>"Öppnad",
        "it"=>"Aperta",
    ),
    "Closed"=>array(
        "sv"=>"Stängd",
        "it"=>"Chiusa",
    ),
    // index/classes/MenuGenerator.php
    "Administrate election"=>array(
        "sv"=>"Administrera val",
        "it"=>"Gestire le votazioni",
    ),
    "See previous rounds"=>array(
        "sv"=>"Se tidigare omgångar",
        "it"=>"Vedere precedenti votazioni",
    ),
    "See previous round"=>array(
        "sv"=>"Se föregående omgång",
        "it"=>"Vedere precedente votazione",
    ),
    "See all rounds"=>array(
        "sv"=>"Se alla omgångar",
        "it"=>"Vedi tutte le votazioni",
    ),
    "New user"=>array(
        "sv"=>"Ny användare",
        "it"=>"Nuovo utente",
    ),
    "Manage election session"=>array(
        "sv"=>"Hantera valtillfälle",
        "it"=>"Gestisci sessione elettorale",
    ),
    "Usage history"=>array(
        "sv"=>"Användningshistorik",
        "it"=>"Cronologia d'uso",
    ),
    // index/admin/electionControl.php
    "Create new election"=>array(
        "sv"=>"Skapa nytt val",
        "it"=>"Creare nuova elezione",
    ),
    "Name of election:"=>array(
        "sv"=>"Namn på val:",
        "it"=>"Nome dell'elezione",
    ),
    "Max number of people:"=>array(
        "sv"=>"Max antal personer:",
        "it"=>"Numero massimo di persone:",
    ),
    "Receive codes in CSV-format (for distance voting)"=>array(
        "sv"=>"Få koder i CSV-format (för distanstörstning)",
        "it"=>"Ricevere i codici in formato CSV (per il voto a distanza)",
    ),
    "Create"=>array(
        "sv"=>"Skapa",
        "it"=>"Creare",
    ),
    "A new election has been created!"=>array(
        "sv"=>"Ett nytt val har skapats!",
        "it"=>"E' stata creata una nuova elezione",
    ),
    "Close current election"=>array(
        "sv"=>"Stäng nuvarande val",
        "it"=>"Chiudi elezione corrente",
    ),
    "Close election"=>array(
        "sv"=>"Stäng val",
        "it"=>"Chiudi elezione"
    ),
    "Previous election rounds"=>array(
        "sv"=>"Tidigare valomgångar",
        "it"=>"Precedenti sessioni elettorali",
    ),
    // actions/votingspagehandler.php
    "You have not selected anything to vote on"=>array(
        "sv"=>"Du har inte valt någon att rösta på",
        "it"=>"Non è stata selezionata nessuna opzione di voto",
    ),
    "The election round you are trying to vote on has already ended. The page has been refreshed so you can try again"=>array(
        "sv"=>"Den valomgång du försöker rösta på har redan avslutats. Sidan har nu uppdaterats så du kan försöka igen",
        "it"=>"La sessione elettorale per cui stai tentando di votare risulta chiusa. La pagina è stata aggiornata così potrai provare nuovamente.",
    ),
    "You are not allowed to pick too many candidates"=>array(
        "sv"=>"Du får inte välja för många kandidater",
        "it"=>"Ridurre il numero delle opzioni votate",
    ),
    "You have not entered any personal code"=>array(
        "sv"=>"Du har inte angett någon personlig valkod",
        "it"=>"Non è stato inserito alcune codice personale",
    ),
    "You have not entered any temporary code"=>array(
        "sv"=>"Du har inte angett någon tillfällig valkod",
        "it"=>"Non è stato inserito alcun codice temporaneo",
    ),
    "The election round has already been terminated"=>array(
        "sv"=>"Valomgången har redan avslutats",
        "it"=>"La sessione elettorale risulta già terminata",
    ),
    "Your vote has been registered"=>array(
        "sv"=>"Din röst har blivit registrerad",
        "it"=>"Il tuo voto è stato registrato",
    ),
    "Your vote was not registered. This can depend on you entering one of the codes wrong, or because you already have voted"=>array(
        "sv"=>"Din röst blev inte registrerad. Detta kan bero på att du skrev in någon av koderna fel eller att du redan röstat",
        "it"=>"Il tuo voto non è stato registrato. Questo può accadere perché hai inserito dei codici errati, oppure perché hai già votato"
    ),
    // actions/usersessionhandler.php
    "You have not entered any username"=>array(
        "sv"=>"Du har inte skrivit in något användarnamn",
        "it"=>"Non è stato inserito il nome utente",
    ),
    "You have not entered any password"=>array(
        "sv"=>"Du har inte angett något lösenord",
        "it"=>"Non è stata digitata la password",
    ),
    "The username and/or the password is wrong"=>array(
        "sv"=>"Användarnamet och/eller lösenordet är fel",
        "it"=>"Il nome utente e/o la password sono errati",
    ),
    "One or more of the fields were empty"=>array(
        "sv"=>"Något av fälten var tomma",
        "it"=>"Uno o più campi risultano non compilati",
    ),
    "The username you entered already exists"=>array(
        "sv"=>"Användarnamnet du angav finns redan",
        "it"=>"Anvendarnamnet due gauv finns rejdan",
    ),
    "The password has been changed"=>array(
        "sv"=>"Lösenordet är bytt",
        "it"=>"Löesenordet é bytat",   // First actual translation is "bytt" -> "bytat"
    ),
    "A new user has been created"=>array(
        "sv"=>"En ny användare har skapats",
        "it"=>"E' stato creato un nuovo utente",
    ),
    "User deleted"=>array(
        "sv"=>"Användaren raderades",
        "it"=>"Utente elimnato",
    ),
    "You have not chosen any users to delete"=>array(
        "sv"=>"Du har inte valt några användare att radera",
        "it"=>"Non è stato scelto alcune utente da eliminare",
    ),
    // actions/genlastresult.php
    "Please wait. Voting in progress."=>array(
        "sv"=>"Var vänlig vänta. Röstning pågår.",
        "it"=>"Attendere. Votazione in corso",
    ),
    // actions/electionadminpagehandler.php
    "You have not entered what to be elected"=>array(
        "sv"=>"Du har inte angett vad som ska väljas",
        "it"=>"Non è stato inserito l'eggetto della votazione",
    ),
    "You have not entered how many one can vote on"=>array(
        "sv"=>"Du har inte angett hur många man får rösta på",
        "it"=>"Non è stato inserito il numero massimo di voti per votante",
    ),
    "An election is already in progress"=>array(
        "sv"=>"En valomgång är redan igång",
        "it"=>"Ejn vaulomgong é rejdan igång",
    ),
    "You must enter at least two candidates"=>array(
        "sv"=>"Du måste ange minst två kandidater",
        "it"=>"E' necessario inserire almeno due candidati",
    ),
    "A new election round has begun"=>array(
        "sv"=>"En ny valomgång har börjat",
        "it"=>"Ejn ny vaulomgong haur startat'",
    ),
    // actions/csvcodesend.php
    "Personal code"=>array(
        "sv"=>"Personlig valkod",
        "it"=>"Codice personale",
    ),
    "Boo! You are not allowed to do that."=>array(
        "sv"=>"Fy! Så får du inte göra.",
        "it"=>"Azione non consentita",
    ),
    // actions/codeprint.php
    "E-vote, E-sektionen's voting system"=>array(
        "sv"=>"E-vote, E-sektionens röstningssystem",
        "it"=>"E-vote, Sistema di voto delle sezioni",
    ),
    "Your personal code is"=>array(
        "sv"=>"Din personliga valkod är",
        "it"=>"Il tuo codice personale è",
    ),
    // actions/adminpagehandler.php
    "You have not entered a name for the election"=>array(
        "sv"=>"Du har inte angett något namn på valet",
        "it"=>"Non è stato dato il nome alle elezioni",
    ),
    "You have not entered the max number of people"=>array(
        "sv"=>"Du har inte angett det maximala antalet personer",
        "it"=>"Non è stato indicato il numero massimo di persone",
    ),
    "There is already an election in progress"=>array(
        "sv"=>"Det pågår redan ett val",
        "it"=>"C'è già una votazione in corso",
    ),
    "The election is now closed"=>array(
        "sv"=>"Valet är nu stängt",
        "it"=>"Le elezioni sono chiuse",
    ),
    "Wrong username and/or password somewhere"=>array(
        "sv"=>"Fel lösenord och/eller användarnamn någonstans",
        "it"=>"Username e/o Password errati",
    ),
    // data/RandomInfo.php
    // Success array
    "*Happy trumpet fanfare*"=>array(
        "sv"=>"*Glad trumpetfanfar*",
        "it"=>"*Glaud trumpetfanfar*",
        "it"=>"*Glaud trumpetfanfar*",
    ),
    "You're the best!"=>array(
        "sv"=>"Du är bäst!",
        "it"=>"Due é en päärla",
        "it"=>"Due é en päärla",
    ),
    "You know this!"=>array(
        "sv"=>"Du kan det här!",
        "scanan"=>"Du fattar det här!",
        "scanan"=>"Du fattar det här!",
    ),
    "Splendid!"=>array(
        "sv"=>"Kanon!",
        "it"=>"Redigt bra!",
        "it"=>"Redigt bra!",
    ),
    "You are unreasonably good at this!"=>array(
        "sv"=>"Du är orimligt duktig på det här!",
        "it"=>"Due é sinnessjukt brau på detta!",
        "it"=>"Due é sinnessjukt brau på detta!",
    ),
    "Cool!"=>array(
        "sv"=>"Fico!",
        "it"=>"Ballt!",
        "it"=>"Ballt!",
    ),
    "Ja!"=>array( // this one is the other way around
        "sv"=>"Yes!",
        "it"=>"Oui!",
        "it"=>"Sìììì!",
    ),
    "What a talent!"=>array(
        "sv"=>"Vilken talang!",
        "it"=>"Che talento!", // #mestamästarna
    ),
    "You did it!"=>array(
        "sv"=>"Du lyckades!",
        "it"=>"Due gjoerde ente fejl!",
        "it"=>"Due gjoerde ente fejl!",
    ),
    "Very niice!"=>array(
        "sv"=>"Kalasbra!",
        "it"=>"Riiktigt brau!",
        "it"=>"Riiktigt brau!",
    ),
    "Immense happiness!"=>array(
        "sv"=>"Ofantlig lycka!",
        "it"=>"Jäevligt glatt!",
        "it"=>"Jäevligt glatt!",
    ),
    "Really good!"=>array(
        "sv"=>"Toppenbra!",
        "it"=>"Dejlig!",
        "it"=>"Dejlig!",
    ),
    "Yup!"=>array(
        "sv"=>"Jajamensan!",
        "it"=>"Jaddå!",
        "it"=>"Jaddå!",
    ),
    "Look at them skillz!"=>array(
        "sv"=>"Look at dem skillz!",
        "it"=>"Kålla in skillzen!",
        "it"=>"Kålla in skillzen!",
    ),
    "You got some MAD voting skills!"=>array(
        "sv"=>"You got some MAD voting skills!",
        "it"=>"You gått såm MAD voting skills!",
        "it"=>"You gått såm MAD voting skills!",
    ),
    "Your degree of being good is high!"=>array(
        "sv"=>"Din duktighetsgrad är hög!",
        "it"=>"Due é en Skåuning i själen!",
        "it"=>"Due é en Skåuning i själen!",
    ),
    "Fantastic!"=>array(
        "sv"=>"Fantastiskt!",
        "it"=>"Fantastiiskt!",
        "it"=>"Fantastiiskt!",
    ),
    "Truly great!"=>array(
        "sv"=>"Storartat!",
        "it"=>"Som en skåunsk såmmardaug!",
        "it"=>"Som en skåunsk såmmardaug!",
    ),
    "Phenomenal!"=>array(
        "sv"=>"Fenomenalt!",
        "it"=>"Fenåmenault!",
        "it"=>"Fenåmenault!",
    ),
    "Outstanding!"=>array(
        "sv"=>"Enastående!",
        "it"=>"En po' miljonen!",
        "it"=>"En po' miljonen!",
    ),
    "Formidable!"=>array(
        "sv"=>"Formidabelt!",
        "it"=>"Stabilare änn Hallandsåsen!",
        "it"=>"Stabilare änn Hallandsåsen!",
    ),
    "Brilliant!"=>array(
        "sv"=>"Strålande!",
        "it"=>"Brillante!",
    ),
    "Magnificent!"=>array(
        "sv"=>"Magnifikt!",
        "it"=>"Magnifico!"
    ),
    "Excellent!"=>array(
        "sv"=>"Förträffligt!",
        "it"=>"Ottimo'!",
    ),
    "Noice!"=>array(
        "sv"=>"Gustoso!",

    ),
    "Real tough!"=>array(
        "sv"=>"Tufft!",
    ),
    // ...
    "You get an A in Usage of E-vote!"=>array(
        "sv"=>"Du får en 5:a i användning av E-vote",
    ),
    "You are so good!"=>array(
        "sv"=>"Du är underbart duktig!",
    ),
    "YEAH!"=>array(
        "sv"=>"GÖTTANS",
        "it"=>"GÖTT",
    ),
    // Error array
    "Something went wrong."=>array(
        "sv"=>"Något gick fel.",
        "it"=>"Errore",
    ),
    "Ouch!"=>array(
        "sv"=>"Ajdå!",
    ),
    "Oof!"=>array(
        "sv"=>"Attans!",
    ),
    "Whoops!"=>array(
        "sv"=>"Whoops!",
    ),
    "Nooo!"=>array(
        "sv"=>"Naj!",
    ),
    "Oopsie!"=>array(
        "sv"=>"Hoppsan!",
    ),
    "Gosh darn it"=>array(
        "sv"=>"Rackarns!",
        "it"=>"Föer i hilvede!",
    ),
    "Nails!"=>array(
        "sv"=>"Järnspikar!",
    ),
    "Frick!"=>array(
        "sv"=>"Sablarns!",
    ),
    "What the frick?!"=>array(
        "sv"=>"Attans järnspikar!",
    ),
    "Whuuupps!"=>array(
        "sv"=>"Whuuupps!",
    ),
)
);
?>