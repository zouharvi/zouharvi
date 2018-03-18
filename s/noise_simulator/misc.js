function getWordLength() {
  return parseInt(word_length_txt.text());
}

function getMessagesPerRun() {
  return parseInt(messages_per_run_txt.text());
}

function getRepetitions() {
  return parseInt(repetitions_txt.text());
}

function getErrorProbability() {
  return parseFloat(error_probability_txt.text());
}

function getIsRepeatWords() {
  return $('#repeat_words').is(':checked');
}

generateWords = function(wordLength, n) {
  var arr = [];
  for(var i = 0; i < n; i++) {
    var str = '';
    for(var j = 0; j < wordLength; j++)
      str += Math.floor(Math.random()*2);
    arr.push(str);
  }
  return arr;
}

repeatWords = function(words, rep) {
  var wordsN = [];
  for(i in words) {
    var arr = [];
    for(j = 0; j < rep; j++)
      arr.push(words[i]);
    wordsN.push(arr);
  }
  return wordsN;
}

repeatBits = function(words, rep) {
  var wordsN = [];
  for(i in words) {
    var arr = [];
    for(j in words[i]) {
      var str = '';
      for(var k = 0; k < rep; k++)
        str += words[i][j];
      arr.push(str);
    }
    wordsN.push(arr);
  }
  return wordsN;
}

addNoise = function(words, errorProbability) {
  var wordsN = [];
  var wordsHTML = [];
  for(var i in words) {
    var arr = [];
    var arrHTML = [];
    for(var j in words[i]) {
      var str = '';
      var strHTML = '';
      for(var k in words[i][j]) {
        if(Math.random() < errorProbability) {
          var bit = words[i][j][k] =='0'?'1':'0';
          strHTML += "<span class='error_bit'>" + bit + "</span>";
          str += bit;
        } else {
          strHTML += words[i][j][k];
          str += words[i][j][k];
        }
      }
      arr.push(str);
      arrHTML.push(strHTML);
    }
    wordsN.push(arr);
    wordsHTML.push(arrHTML);
  }
  return [wordsN, wordsHTML];
}

compare = function(words, words2, repetitions) {
  var wordsHTML = [];
  var result = {correct: 0, undetected: 0, detected: 0, all: 0};

  for(var i in words) {
    var arr = [];
    for(var j in words[i]) {
      var str = '';
      for(var k in words[i][j]) {
        var dBit = words2[i][j][k];
        result.all++;
        if(dBit == '2') {
          str += "<span class='error_bit_detected'>0</span>"
          result.detected++;
        } else if(dBit == '3') {
          str += "<span class='error_bit_detected'>1</span>"
          result.detected++;
        } else if(words[i][j][k] == dBit) {
          str += dBit;
          result.correct++;
        } else {
          str += "<span class='error_bit_decoded'>" + dBit + "</span>";
          result.undetected++;
        }
      }
      arr.push(str);
    }
    wordsHTML.push(arr);
  }

  result.correct /= repetitions;
  result.undetected /= repetitions;
  result.detected /= repetitions;
  result.all /= repetitions;

  return [wordsHTML, result];
}
