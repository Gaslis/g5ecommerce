// let csrf = document.querySelector('meta[name="csrf-token"]').content
// let email = document.getElementById('email')
// let password = document.getElementById('password')
// let btn = document.querySelector('button[type=submit]')
//
//
// let form = new FormData
//
// // btn.addEventListener('hover', function (e) {
// //   console.log(e)
// // })
//
// btn.addEventListener('click', function(e){
//   console.log(e)
//   e.preventDefault()
//
//   form.append('_token', csrf)
//   form.append('email', email.value)
//   form.append('password', password.value)
//
//   fetch('http://localhost:8000/api/login',{
//     method: 'post',
//     body: form
//   }).then(function (res) {
//   console.log(res.json())
// })
// })
//
// console.log(email, password, btn)
