document.addEventListener('DOMContentLoaded', function () {
  document.querySelector('#contact-form').addEventListener('submit', (e) => {
    e.preventDefault();

    // email js 
    var params = {
      name: document.querySelector("#name").value,
      email: document.querySelector("#email_id").value,
      message: document.querySelector("#message").value,
    };
    if (params.name == "" || params.email == "" || params.message == "") {
      alert("Please fill up all field !");
      return;
    }
    else {
      var serviceID = "service_orpgssv";
      var templateID = "template_7fv3gfj";
      emailjs.send(serviceID, templateID, params)
        .then(res => {
          alert("Message send successfully");
        })
        .catch((err) => alert(err));

      // clear the form 
      e.target.elements.name.value = '';
      e.target.elements.email.value = '';
      e.target.elements.message.value = '';
    }

  });
});
