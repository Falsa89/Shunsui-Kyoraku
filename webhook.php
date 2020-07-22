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
if(strpos($text, "/start") === 0 || $text=="capitano")
{
	$response = "......!";
}
elseif (strpos($text, "bevi") !== false)
{
	$response = " Allora non può essere aiutato. Bevi, amico mio! Dato che non tornerai indietro, almeno rimani qui per un po '. Solo un po'. Tutti gli altri capitani dovrebbero aver fatto le loro mosse ora. Questa battaglia dovrebbe concludersi presto. Fino ad allora, per favore, rimani qui e brinda al contenuto del tuo cuore. ";
}
elseif (strpos($text, "determin") !== false)
{
	$response = " Dato che sei così determinato, è stato scortese da parte mia cercare di dissuaderti. Mi scuso . Molto bene allora. Non ho altra scelta che toglierti la vita.";
}
elseif (strpos($text, "aspett") !== false)
{
	$response = "Aspettare pazientemente e credere nei propri subordinati fa parte del lavoro di un capitano. ";
}
elseif (strpos($text, "ragazza") !== false)
{
	$response = "Bene, tu sei il membro più giovane della squadra. E non potrei mai dimenticare il nome di una ragazza carina";
}
if (strpos($text, "natura") !== false) 
{
	$response = "Va contro la mia natura diventare duro con le donne. Mi reputo un gentiluomo.";
}
elseif (strpos($text, "maniere") !== false)
{
	$response = " Gettare via la vittoria per amore delle buone maniere è un errore da principiante. I capitani non hanno tempo da perdere per quel tipo di cose. Non perdere tempo a cercare di interpretare il bravo ragazzo. Dal momento in cui ti trovi sul campo di battaglia, entrambe le parti sono malvagie ";

}
elseif (strpos($text, "ragazzo") !== false)
{
	$response = "Immagino di non essere un grande ascoltatore quando si tratta di ragazzi. Mi annoio abbastanza rapidamente.";

}
elseif (strpos($text, "onore") !== false)
{
	$response = "Onore? È di questo che state parlando ? Allora parliamo invece del nostro dovere verso il Gotei 13. L'onore non proteggerà il mondo. Non credo che usare il male per sconfiggere il male è di per sé un atto malvagio ";

}
elseif (strpos($text, "dolore") !== false)
{
	$response = "Anch'io preferirei fare così. Non mi piace il dolore. Però stavolta non possiamo proprio permettercelo";

}
elseif (strpos($text, "dolce") !== false)
{
	$response = "Dolce, dolce Nanao-chan. Lovely, lovely Nanao-chan...";

}
elseif (strpos($text, "bambina") !== false)
{
	$response = "Quella bambina con te ... Puoi mandarla da qualche altra parte? Non posso davvero uscire con lei .";
}
elseif (strpos($text, "freddo") !== false)
{
	$response = "Perché così freddo, Nanao-chan?";
}
elseif (strpos($text, "erba") !== false)
{
	$response = "Ho messo questo filo d'erba in bocca pensando che avrei avuto un bell'aspetto. Ma deve essere avvelenato perché ha la bocca insensibile.
";
}
elseif (strpos($text, "buongiorno") !== false)
{
	$response = "Buongiornoo!";
}
elseif (strpos($text, "buonasera") !== false)
{
	$response = "Buonasera, andiamo a bere qualosa insieme ?";
}
elseif (strpos($text, "ciao") !== false)
{
	$response = "ciaoo";
}
elseif (strpos($text, "benvenut") !== false)
{
	$response = "benvenuta recluta";
}
elseif (strpos($text, "kyoraku") !== false)
{
	$response = "capitano della 1a divisione e il capitano-comandante del Gotei 13; ex capitano dell'ottava divisione. è un uomo rilassato e sgargiante, evidente nel suo stile di abbigliamento e atteggiamento in generale. Nel tempo libero, spesso beve sake nei bar o corteggia le donne; in particolar modo la sua luogotenente, Nanao Ise, che chiama 'la mia Nanao-chan'";
}


$parameters = array('chat_id' => $chatId, "text" => $response);
$parameters["method"] = "sendMessage";
echo json_encode($parameters);
