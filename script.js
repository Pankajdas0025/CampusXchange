
  // Mobile navbar toggler 
function myFunction() {
  var x = document.getElementById("myTopnav");
  // var y = document.getElementsByClassName("icon").InnerText="&times";
  if (x.className === "topnav") {
    x.className += " responsive";
  

  } else {
    x.className = "topnav";
  }
}

  
    
  function copyLink(relativePath) {
    // window.location.origin + "/MYPHP/CRUD/" + 
    const baseURL = relativePath;
    navigator.clipboard.writeText(baseURL).then(() => {
      alert("Copied blog link to clipboard!");
    }).catch(() => {
      alert("Failed to copy!");
    });
  }


  // for portfolio section slider .....................................................................
  const slider = document.getElementById("slider");
  const total = slider.children.length;
  let currentIndex = 0;

  const numberContainer = document.getElementById("numberContainer");

  // Create numbered buttons
  for (let i = 0; i < total; i++) {
    const btn = document.createElement("span");
    btn.classList.add("num-btn");
    btn.textContent = i + 1;
    if (i === 0) btn.classList.add("active");
    btn.setAttribute("data-index", i);
    btn.addEventListener("click", () => {
      currentIndex = i;
      updateSlider();
    });
    numberContainer.appendChild(btn);
  }

  function updateSlider() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    document.querySelectorAll(".num-btn").forEach(btn => btn.classList.remove("active"));
    document.querySelectorAll(".num-btn")[currentIndex].classList.add("active");
  }

  // Auto scroll
  setInterval(() => {
    currentIndex = (currentIndex + 1) % total;
    updateSlider();
  }, 2000);

  // Swipe support for mobile only ...........................................................................................
  const sliderBox = document.getElementById("sliderBox");
  let startX = 0;

  sliderBox.addEventListener("touchstart", (e) => {
    startX = e.touches[0].clientX;
  });

  sliderBox.addEventListener("touchend", (e) => {
    const endX = e.changedTouches[0].clientX;
    const diff = startX - endX;

    if (diff > 50) {
      currentIndex = (currentIndex + 1) % total;
    } else if (diff < -50) {
      currentIndex = (currentIndex - 1 + total) % total;
    }

    updateSlider();
  });


      //POrtfolio  Response form validation .......................................................................................

//valid username ............................................
function Checknamefun()
{
	var Name=document.getElementById("Name").value;
	if(Name.match(/[0-1]/))
{
	alert("Numbers are not allowed");
  var Name=document.getElementById("Name").value="";
}

}


//valid user mobile number .........................................................................
function Checkmobfun()
{
	var Mobile=document.getElementById("Mobile").value;
	if(Mobile.length<10 ||Mobile.match(/[a-z]/))
{
	alert("Enter a valid Mobile number");
  var Mobile=document.getElementById("Mobile").value=" ";
  return false;
}
}
    

// incresase count of numbers 
function changCount() {
  let count1 = 0;
  let count2 = 0;
  let count3 = 0;

  let maxCounts1 = 15;
  let maxCounts2 = 40;
  let maxCounts3 = 30;

  let interval = setInterval(() => {
    if (count1 < maxCounts1) {
      count1++;
      document.getElementById("Count1").textContent = count1 + "+";
    }

    if (count2 < maxCounts2) {
      count2++;
      document.getElementById("Count2").textContent = count2 + "+";
    }

    if (count3 < maxCounts3) {
      count3++;
      document.getElementById("Count3").textContent = count3 + "+";
    }

    // Stop interval if all are done
    if (count1 >= maxCounts1 && count2 >= maxCounts2 && count3 >= maxCounts3) {
      clearInterval(interval);
    }
  },100); // run every 100ms
}


// to display popup box ................................................................................................
setTimeout(function()
{
document.querySelector("#btn1").style.display = "block";
document.querySelector("#btn2").style.display = "block";
document.querySelector("main").style.opacity = "0.3";
document.querySelector("main").style.pointerEvents ="none";




},10000)

// to remove popup box ................................................................................................
function RemoveIpop()
{
  document.querySelector("#btn1").style.display = "none";
  document.querySelector("#btn2").style.display = "none";
  document.querySelector("main").style.opacity = "1";
  document.querySelector("main").style.pointerEvents ="fill";
}
