
var _currentUrl = document.createElement('a');
_currentUrl.href = window.location.href;
var _languageCode = _currentUrl.pathname.substring(1, _currentUrl.pathname.indexOf('/', 1));
document.cookie = '_languageCode=' + _languageCode + ';path=/';
var _countryCode = 'CM';
document.cookie = '_countryCode=CM;path=/';
