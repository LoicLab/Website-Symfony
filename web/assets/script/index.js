var texte = document.querySelector(".texte")
    window.onscroll = function () {
      if (window.scrollY > 351 ) {
        texte.id = "animationTexte";
      }
    }
