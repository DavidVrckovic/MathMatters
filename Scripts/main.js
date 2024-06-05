
// DROPDOWN MENU //

const gradiva = document.querySelectorAll("div.gradiva");
const lekcije = document.querySelectorAll("div.lekcije");

if (gradiva) {

    for (let i = 0; i < gradiva.length; i++) {

        gradiva[i].addEventListener("click", () => {

            lekcije[i].classList.toggle("lekcije_active");

            if (lekcije[i].style.display === "flex") {

                lekcije[i].style.display = "none";

            } else {

                lekcije[i].style.display = "flex";

            }

        });

    }

}

//      HEHEHE DOBAR KOD       //