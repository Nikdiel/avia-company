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
  

  let currentLang = 'ru';

  document.getElementById('rus').addEventListener('click', function(){
    changeLanguage('ru');
    console.log(currentLang);
    updatePageContent();
  })

  document.getElementById('eng').addEventListener('click', function(){
    changeLanguage('en');
    console.log(currentLang);
    updatePageContent();
  })
  

  function changeLanguage(lang) {
    currentLang = lang;
  }
  

  function translate(key) {
    return translations[currentLang][key] || key; 
  }


  function updatePageContent() {
   
    document.getElementById('greeting').textContent = translate("Привет");
    document.getElementById('status').textContent = translate("Как дела?");
  }

  updatePageContent();