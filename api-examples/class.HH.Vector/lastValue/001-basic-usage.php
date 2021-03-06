<?hh

namespace Hack\UserDocumentation\API\Examples\Vector\LastValue;

function echoLastValue(Vector<string> $v): void {
  $last_value = $v->lastValue();
  if ($last_value !== null) {
    echo 'Last value: '.$last_value."\n";
  } else {
    echo 'No last value (Vector is empty)'."\n";
  }
}

// Will print "Last value: yellow"
echoLastValue(Vector {'red', 'green', 'blue', 'yellow'});

// Will print "No last value (Vector is empty)"
echoLastValue(Vector {});
