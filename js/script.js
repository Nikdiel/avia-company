const translations = {
    en: {
      "Привет": "Hello",
      "Как дела?": "How are you?"
    },
    ru: {
      "Привет": "Привет",
      "Как дела?": "Как дела?"
    }
  };
  
  // Текущий язык
  let currentLang = 'ru';

  document.getElementById('rus').addEventListener('click', function(){
    changeLanguage('ru');
    console.log(currentLang);
  })

  document.getElementById('eng').addEventListener('click', function(){
    changeLanguage('en');
    console.log(currentLang);
  })
  
  // Функция смены языка
  function changeLanguage(lang) {
    currentLang = lang;
  }
  
  // Функция получения перевода
  function translate(key) {
    return translations[currentLang][key] || key; // Если перевода нет, вернуть оригинал
  }
  