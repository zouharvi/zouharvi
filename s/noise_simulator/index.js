var error_probability_txt = $('#error_probability_txt');
var messages_per_run_txt = $('#messages_per_run_txt');
var word_length_txt = $('#word_length_txt');
var repetitions_txt = $('#repetitions_txt');

var rep_dispatched_list = $('#rep_dispatched_list');
var rep_noise_list = $('#rep_noise_list');
var rep_decoded_list = $('#rep_decoded_list');

var result_correct = $('#result_correct');
var result_undetected = $('#result_undetected');
var result_detected = $('#result_detected');
var result_all = $('#result_all');
var result_raw_success = $('#result_raw_success');
var result_recalc_success = $('#result_recalc_success');
var result_time_total = $('#result_time_total');
var result_est = $('#result_est');

var messagesPerRun, wordLength, errorProbability;
var repetition = new Repetition();

function updateVars() {
  messagesPerRun = getMessagesPerRun();
  wordLength = getWordLength();
  errorProbability = getErrorProbability();
}

function repetitionRun() {
  updateVars();
  var repetitions = getRepetitions();
//  var language = {};

  var isRepeatWords = getIsRepeatWords();

  var dispatchedWords = generateWords(wordLength, messagesPerRun);
  if(isRepeatWords)
    dispatchedWords = repeatWords(dispatchedWords, repetitions);
  else
    dispatchedWords = repeatBits(dispatchedWords, repetitions);

  rep_dispatched_list.html('');
  for(i in dispatchedWords)
    rep_dispatched_list.append("<p class='list_item'>"+ dispatchedWords[i].join("<span class='small_space'> </span>") +"</p>");

  var noiseComp = addNoise(dispatchedWords, errorProbability*([1, 0.9, 0.9, 0.8, 0.8, 0.7, 0.7, 0.7, 0.7, 0.7, 0.7, 0.7, 0.7, 0.7, 0.7, 0.7][repetitions-1]));
  var noiseWords = noiseComp[0];
  var noiseWordsHTML = noiseComp[1];

  rep_noise_list.html('');
  for(i in noiseWordsHTML)
    rep_noise_list.append("<p class='list_item'>" + noiseWordsHTML[i].join("<span class='small_space'> </span>") + "</p>");

  var decodedWords = repetition.decode(noiseWords, repetitions, isRepeatWords, wordLength);
  var comparison = compare(dispatchedWords, decodedWords, repetitions);
  var comparedWords = comparison[0];
  var result = comparison[1];

  rep_decoded_list.html('');
  for(i in comparedWords)
    rep_decoded_list.append("<p class='list_item'>" + comparedWords[i].join("<span class='small_space'> </span>") + "</p>");

  result_correct.text(result.correct);
  result_undetected.text(result.undetected);
  result_detected.text(result.detected);
  result_all.text(result.all);
  result_raw_success.text(Math.floor(result.correct/result.all*100));
  result_recalc_success.text(Math.floor(result.correct/(result.all-result.detected)*100));

}
