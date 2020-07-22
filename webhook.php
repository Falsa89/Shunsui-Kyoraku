<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);
if(!$update)
{
  exit;
}
$message = isset($update['message']) ? $update['message'] : "";
$messageId = isset($message['message_id']) ? $message['message_id'] : "";
$chatId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$senderId = isset($message['chat']['id']) ? $message['chat']['id'] : "";
$firstname = isset($message['chat']['first_name']) ? $message['chat']['first_name'] : "";
$lastname = isset($message['chat']['last_name']) ? $message['chat']['last_name'] : "";
$username = isset($message['chat']['username']) ? $message['chat']['username'] : "";
$date = isset($message['date']) ? $message['date'] : "";
$text = isset($message['text']) ? $message['text'] : "";
$text = trim($text);
$text = strtolower($text);
header("Content-Type: application/json");
$response = '';
if(strpos($text, "/start") === 0 || $text=="hogyoku")
{
	$response = "......!";
}
elseif (strpos($text, "paura") !== false)
{
	$response = "La paura è necessaria per raggiungere l'evoluzione. La paura che, nel proprio stato attuale, si possa probabilmente essere distrutti in qualsiasi momento. Grazie. È grazie alla tua presenza che sono finalmente riuscito a superare sia Shinigami che Hollow";
}
elseif (strpos($text, "illusione") !== false)
{
	$response = "non sono più l'Aizen Sosuke che conoscevi? Sfortunatamente era tutta un'illusione... l'Aizen Sosuke che conoscevi non è mai esistito, fin dall'inizio..!";
}
elseif (strpos($text, "bugi") !== false)
{
	$response = "Questo mondo non è composto da verità o bugie.. Ma solo da fatti!! Tuttavia, coloro che vivono che vivono in questo mondo sbagliano nel credere che solo i fatti a loro favorevoli siano la verità..!! non conoscono altro modo per vivere...";
}
elseif (strpos($text, "calm") !== false)
{
	$response = "che mi affrontiate con cautela... che mi affrontiate incautamente..... o anche che non mi affrontiate affatto... il risultato sarà sempre lo stesso... la vostra fine è inevitabile!";
}
if (strpos($text, "superior") !== false) 
{
	$response = "Immagino sia naturale per gli inferiori attaccarsi ai loro superiori. Se desiderano mantenere il loro livello, non hanno altra scelta che obbedire. Non c'è mai fine a questa catena... All'inizio si è pieni di queste utopie, ma poi per levare questo peso, si cerca di trovare qualcuno sempre più bravo di loro. E i forti ricercano altri ancora più forti, così da rifugiarsi in loro. Ecco come sono nati gli dei. Ma non fare errori, mi rispettano ancora tutti. Da questo momento in avanti, assisterete alla potenza del dio in cui ripongono fiducia. Diverrò quel dio in cui non possono non credere.";
}
elseif (strpos($text, "ciel") !== false)
{
	$response = "Fin dal principio Nessuno ha mai dominato il regno dei cieli.. Non tu... non io e nemmeno gli Shinigami.... Ma l'insopportabile vuoto sul trono del Cielo terminerà e d'ora in poi siederò io su di esso!";

}
elseif (strpos($text, "lament") !== false)
{
	$response = "questi sono discorsi da perdenti... un vincente dovrebbe parlare di come il mondo dovrebbe essere!! non di come è!!";

}
elseif (strpos($text, "ammir") !== false)
{
	$response = "L'ammirazione...è il sentimento più lontano dalla comprensione.";

}
elseif (strpos($text, "principi") !== false)
{
	$response = "I principi esistono soltanto per gli individui che non possono sopravvivere se non aggrappandosi ad essi. Proseguiamo ora, oltre il confine dei principi del cosmo.";

}
elseif (strpos($text, "bello") !== false)
{
	$response = "Pensiamo che un fiore cresciuto sul ciglio di un precipizio sia bello, perché i nostri piedi si fermano sul quel ciglio. Non riusciamo ad avanzare su quel cielo come quel fiore impavido.";

}
elseif (strpos($text, "imita") !== false)
{
	$response = "Gli uomini sono tutti un'imitazione delle scimmie. Gli dei sono tutti un'imitazione degli uomini";
}
elseif (strpos($text, "terra") !== false)
{
	$response = "Prostratevi tutti impotenti, ed osservate la battaglia";
}
elseif (strpos($text, "odio") !== false)
{
	$response = "Odiami... Detestami... Non vado da nessuna parte. Se lo desideri tanto, ti presenterò volentieri la mia spada";
}
elseif (strpos($text, "stort") !== false)
{
	$response = "Ti mostrerò quanto sono distorti i tuoi pensieri! ";
}
elseif (strpos($text, "combatt") !== false)
{
	$response = "Un combattente senza odio, è come un'aquila senza ali. Dei compagni deboli non sono altro che... pesi che ti spezzano le gambe. ";
}
elseif (strpos($text, "concett") !== false)
{
	$response = "Pensi che basti solo la forza per battermi? Sei troppo ottimista. O meglio, credo che i nostri concetti di forza siano troppo diversi. Lascia che te lo dimostri, questa è la vera forza ";
}
elseif (strpos($text, "desider") !== false)
{
	$response = "Gli esseri viventi sono sorprendenti, eh. Sono fatti in modo da possedere a livello latente la capacità di realizzare i miseri desideri del loro minuscolo cuore.";
}
elseif (strpos($text, "trova") !== false)
{
	$response = "Vi aspettate che dica 'Vi ho trovato?' Sbagliato. Ho solo smesso di far finta di cercarvi.";
}
elseif (strpos($text, "ragione") !== false)
{
	$response = "La ragione, esiste solo per coloro che non possono vivere senza aggrapparsi ad essa.";
}
elseif (strpos($text, "speranza") !== false)
{
	$response = "Per favore... Speranza, fede, fiducia... Queste sono parole di un debole, non ho bisogno di parole del genere.";
}
elseif (strpos($text, "fede") !== false)
{
	$response = "Per favore... Speranza, fede, fiducia... Queste sono parole di un debole, non ho bisogno di parole del genere.";
}
elseif (strpos($text, "fiducia") !== false)
{
	$response = "Per favore... Speranza, fede, fiducia... Queste sono parole di un debole, non ho bisogno di parole del genere.";
}
elseif (strpos($text, "nascost") !== false)
{
	$response = "Non temere quello che puoi vedere. In realtà ciò di cui devi aver paura, è ciò che è nascosto ai tuoi occhi.";
}
elseif (strpos($text, "distan") !== false)
{
	$response = "Perché insisti a mantenere una tale distanza da me? Se desideri infliggermi un colpo decisivo, dovresti farlo a distanza ravvicinata. O forse hai paura di avvicinarti troppo e lasciare una minima una parte del mio corpo fuori dalla tua visuale ? Se è così, sono deluso. Mantenere la distanza è un fattore chiave in una battaglia tra due combattenti di uguale forza. Tra te e me, le distanze non hanno alcun significato. Osserva. Sono perfettamente in grado di raggiungere il tuo cuore in qualsiasi momento. ";
}
elseif (strpos($text, "ingann") !== false)
{
	$response = "Non avevo intenzione di ingannare nessuno. È solo che nessuno di voi poteva capire ... Il mio vero io";
}
elseif (strpos($text, "parole") !== false)
{
	$response = "Non usare parole così forti. Ti farà solo sembrare debole";
}
elseif (strpos($text, "spazza") !== false)
{
	$response = "Ai miei occhi, non c'è differenza tra spazzare via un granello di polvere o due";
}
elseif (strpos($text, "piano") !== false)
{
	$response = "tutte le battaglie che hai combattuto, erano tutte parte del mio piano.";
}
elseif (strpos($text, "fianco") !== false)
{
	$response = "Indipendentemente da ciò che può accadere ... Fintanto che camminerai al mio fianco ... Non ci sarà nemico in grado di stare davanti a noi.";
}
elseif (strpos($text, "girate") !== false)
{
	$response = "Non cercare la bellezza in battaglia. Non cercare la bellezza nella morte. Non considerare la tua stessa vita. Se desideri proteggere ciò che deve essere protetto, allora colpisci mentre le spalle del tuo avversario sono girate.";
}
elseif (strpos($text, "posso") !== false)
{
	$response = "No grazie, perché sarebbe noioso";
}
elseif (strpos($text, "ridi") !== false)
{
	$response = "Una ragazza come te dovrebbe sorridere più spesso. I cieli nuvolosi cancellano il sole, e questo abbatte sempre gli spiriti delle persone. Quindi perché non lasciare che il sole splenda ... Per un po 'di più?";
}
elseif (strpos($text, "riso") !== false)
{
	$response = "Una ragazza come te dovrebbe sorridere più spesso. I cieli nuvolosi cancellano il sole, e questo abbatte sempre gli spiriti delle persone. Quindi perché non lasciare che il sole splenda ... Per un po 'di più?";
}
elseif (strpos($text, "scopo") !== false)
{
	$response = "Non si tratta di benefici. Il mio unico scopo è sempre stato quello di schiacciare tutti coloro che cercano di controllarmi.";
}
elseif (strpos($text, "aizen") !== false)
{
	$response = "ex capitano della 5a divisione; un intellettuale educato e pacato. Raramente mostra segni di allarme o angoscia, e spesso ha pianificato intere situazioni con largo anticipo. ";
}


$parameters = array('chat_id' => $chatId, "text" => $response);
$parameters["method"] = "sendMessage";
echo json_encode($parameters);
