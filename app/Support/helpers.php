<?php


/*
 * Create a random string
 * @author	XEWeb <>
 * @param $length the length of the string to create
 * @return $str the string
 */
function randomString($length = 6) {
	$str = "";
	$characters = array_merge(range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}

/* http://afikri.com/?p=404
 *
 *
 *
 *
 *
 */

function outputQuote($data){

  $pdf = PDF::loadView('quotes.pdf', compact('data'));
  return $pdf->setOrientation('portrait')->stream();

  return redirect()->back()->with('message', "Thanks, your quote request has been sent");


  // $pdf = PDF::loadView('quotes.pdf', $data);
  // return $pdf->download('invoice.pdf');

}

/*
 *
 *
 * Generate new york timezone time
 *
 */

function newYorkTime() {
	$tz = 'America/New_York';
	$timestamp = time();
	$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
	$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
	$dt->format('d.m.Y, H:i:s');
	return $dt;
}



?>
