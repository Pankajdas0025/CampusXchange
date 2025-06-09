
  function copyLink(relativePath) {
    // window.location.origin + "/MYPHP/CRUD/" + 
    const baseURL = relativePath;
    navigator.clipboard.writeText(baseURL).then(() => {
      alert("Copied blog link to clipboard!");
    }).catch(() => {
      alert("Failed to copy!");
    });
  }

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
  }, 3000);

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

