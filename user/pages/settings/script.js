function submitForm(e) {
  let body = {}
  let formName = e.target.getAttribute('data-form')
  let form = $('form[name=' + formName + ']')[0]
  if (!form) {
    $(this).removeClass('btn-primary').addClass('btn-danger')
  } else {
    let fields = form.querySelectorAll('select, input, textarea')
    for (let field of fields) {
      body[field.id] = field.value
      console.log(field.id, field.value)
    }
  }
}

$('.submit').click(submitForm)