// Example 26-14: javascript.js

function O(i)
{
  if (typeof i == 'object') return i
  else return document.getElementById(i)
}

function S(i)
{
  return O(i).style
}

function C(n)
{
  var t = document.getElementsByTagName('*')
  var o = []

  for (var i in t)
  {
    var e = typeof t[i] == 'object' ? t[i].className : ''
    
    if (e                        ==  n ||
        e.indexOf(' ' + n + ' ') != -1 ||
        e.indexOf(      n + ' ') ==  0 ||
        e.indexOf(' ' + n      ) == (e.length - n.length - 1))
          o.push(t[i])
  }

  return o
}
