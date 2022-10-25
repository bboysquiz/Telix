document.addEventListener("DOMContentLoaded", function () {
    function tabs() {
      let tab = document.querySelectorAll(".tab-pannel__item"),
        info = document.querySelector(".tab-pannel"),
        tabContent = document.querySelectorAll(".tab-content");
  
      let hideTabContent = (a) => {
        for (let i = a; i < tabContent.length; i++) {
          tabContent[i].classList.remove("show");
          tabContent[i].classList.add("hide");
        }
      };
  
      hideTabContent(1);
  
      let showTabContent = (b) => {
        if (tabContent[b].classList.contains("hide")) {
          tabContent[b].classList.remove("hide");
          tabContent[b].classList.add("show");
        }
      };


      let inActiveTab = (a) => {
        for (let i = a; i < tab.length; i++) {
          tab[i].classList.remove("active-tab");
          tab[i].classList.add("no-active-tab");
        }
      };

      inActiveTab(1);
      

      let activeTab = (b) => {
        if (tab[b].classList.contains("no-active-tab")) {
          tab[b].classList.remove("no-active-tab");
          tab[b].classList.add("active-tab");
        }
      };

      

  
      info.addEventListener("click", function (event) {
        let target = event.target;
        if (target && target.classList.contains("tab-pannel__item")) {
          for (let i = 0; i < tab.length; i++) {
            if (target == tab[i]) {
              hideTabContent(0);
              showTabContent(i);
              inActiveTab(0);
              activeTab(i);
              break;
            }
          }
        }
      });
    }
  
    tabs();

  });
  
  