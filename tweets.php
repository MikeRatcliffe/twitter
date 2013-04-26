<?php

$count = count($tweets);

for ($i = 0; $i < $count; $i++) {
  if ($i == 0 && $tweets[$i]->text == 'Unable to contact Twitter.') {
    echo '<div id="tweet0" data-visible="true" class="tweet-content">' .
         '  Firefox is fast, light and awesome there days ... why not <a href="http://www.mozilla.org/firefox/new/">give it a try?</a>' .
         '</div>';
    break;
  }
  echo '<div id="tweet' . $i . '" class="tweet-content"';
  if ($i == 0) {
    echo ' data-visible="true"';
  }
  echo '>' . $tweets[$i]->text . ' - ' . $tweets[$i]->time . '</div>';
}
?>
