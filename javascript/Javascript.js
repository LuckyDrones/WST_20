let userName = '';
const welcomeMessage = () => {
userName == true ? document.getElementById('welcomeMessage').innerHTML = `Hello ${userName}.` : document.getElementById("welcomeMessage").innerHTML ='Hello Stranger.';
}

let login = '';
const loginCheck = () => {
login ? console.log('Login Sucess') : console.log('Login failed');
}