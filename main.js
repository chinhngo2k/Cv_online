const body = document.querySelector(".content__body");
ScrollReveal().reveal(".timeline");

const itemRight = document.querySelectorAll('.item__right ul');
console.log(itemRight);

fetch(
  "http://localhost/CV/server/api/resume/getResumeByPersonId.php?personal_id=1"
)
  .then((res) => res.json())
  .then((data) => {
    console.log(data);
  })
  .catch((err) => console.log(err));
