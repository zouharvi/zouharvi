Repetition = function() { }

Repetition.prototype.decode = function(words, repetitions, repeatWords, messagesPerRun) {
  var dWords = [];

  if(repeatWords) {
    for(var i in words) {
      var arr = [];
      for(var j in words[i])
        arr.push('');
      dWords.push(arr);
    }

    for(var i in words) {
      for(var j in words[i][0]) {
        var ones = 0;
        for(var k in words[i]) {
          if(words[i][k][j] == '1')
            ones++;
        }

        if(ones == repetitions/2) {
          for(var k in words[i])
            dWords[i][k] += words[i][k][j]=='0'?'2':'3';
        } else {
          if(ones > repetitions/2) {
            for(var k in dWords[i])
              dWords[i][k] += '1';
          } else {
            for(var k in dWords[i])
              dWords[i][k] += '0';
          }
        }

      }
    }
  } else {
    for(var i in words) {
      var arr = [];
      for(var j in words[i]) {
        var ones = 0;
        for(var k in words[i][j]) {
          if(words[i][j][k] == '1')
            ones++;
        }
        var str = '';
        if(ones == repetitions/2) {
          str += words[i][j].replace(/0/g, '2').replace(/1/g, '3');
        } else {
          var bitToDuplicate = '0';
          if(ones > repetitions/2)
            bitToDuplicate = '1';
          for(var k = 0; k < repetitions; k++)
            str += bitToDuplicate;
        }

        arr.push(str);
      }
      dWords.push(arr);
    }

  }

  return dWords;
}
