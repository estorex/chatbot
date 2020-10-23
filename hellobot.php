<?
  $input = $_GET["query"];
  $nlp = explode(" ", $input);
  foreach ($nlp as $keyword) {
    if ($keyword == "hello" || $keyword == "Hello" || $keyword == "helo" || $keyword == "hi" || $keyword == "good day") {
      echo "Hello I'm the chatbot.";
    }
  }
?>
