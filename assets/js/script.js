  const greetingElement = document.getElementById('greeting');
  
  function getGreeting() {
    const currentTime = new Date();
    const hours = currentTime.getHours();
  
    if (hours < 12) {
      return 'Asubuhi Njema!';
    } else if (hours < 16) {
      return 'Mchana Mwema!';
    }else if (hours < 19) {
      return 'Jioni Njema!';
    } else {
      return 'Natumai usiku huu utakuletea utulivu!';
    }
  }
  
  const greeting = getGreeting();
  greetingElement.innerText = greeting;
  
  // Auto refresh
  setInterval(getGreeting, 1000);
  ß