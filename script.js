const form = document.querySelector('form');
const resultDiv = document.getElementById('result');

form.addEventListener('submit', function(event) {
  event.preventDefault();
  const searchWord = this.word.value;
  const xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (this.readyState === 4 && this.status === 200) {
      resultDiv.innerHTML = this.responseText;
    }
  };
  xhr.open('GET', `search.php?word=${searchWord}`, true);
  xhr.send();
});
