/*global $:false */

// TWITTER USERNAME 


$(function($){
"use strict"; 
  $("#twitterfeed").tweet({
    username: "etatch", /*Enter your Twitter username */
    modpath: '/js/twitter/', /* director of the twitter folder : ABSOLUTLY DIRECT LINK OF YOUR TWITTER FOLDER */
    page: 1, /*How many tweets to show at a time*/
    avatar_size: null, 
    count: 5, /*Total counts of tweets. */
    loading_text: "Loading latest tweets..." /*Loading text*/
  });     
  
});




// TWITTER FADE EFFECT IN FOOTER

$(document).ready(function() {
"use strict";
var all_tweets = $('.tweet_list li');
var all_tweets_first = $('.tweet_list li:first-child');
var n_tweeets = $(all_tweets).length;
var i = 2;
var first_slice = 1;
var second_slice = 2;
var time = 5000;
$(all_tweets).hide();
$(all_tweets_first).show();

function tweet_loop() {
    setInterval(function() { // this code is executed every 5000 milliseconds (var time = 5000;)

if( i <= n_tweeets ){
$(all_tweets).fadeOut(800);
$(all_tweets).slice(first_slice,second_slice).delay(950).fadeIn(800);

       i++;
       first_slice ++;
       second_slice++;

} //enf i <= n_tweeets
else {
       i= 1;
      first_slice = 0;
      second_slice = 1;
    }

}, time);
}
$(tweet_loop);
});