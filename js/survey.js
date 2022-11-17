function validateSurvey() {
  const errorMsgField = document.getElementById("error-msg");
  errorMsgField.innerText = "";
  if(document.getElementById("program").value === '') {
    errorMsgField.innerText = "Please set a program name";
    return false;
  }

  if(document.getElementById("plength").value === '') {
    errorMsgField.innerText = "Please set the program length";
    return false;
  }

  let checked = false;
  for (let i = 1; i < 4 ; i++) {
    checked = document.getElementById(`fav${i}`).checked ? true : checked;
  }
  if (!checked) {
    errorMsgField.innerText = "Please set at least one checkbox";
    return false;
  }

  document.survey.submit();
}
