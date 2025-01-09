// Tailwind Dark Mode Configuration
tailwind.config = {
  darkMode: "class",
};

// Dark mode toggle function
function toggleDarkMode() {
  const htmlElement = document.documentElement;
  htmlElement.classList.toggle("dark");
}
function toggleDarkMode() {
  const htmlElement = document.documentElement;
  const sunIcon = document.getElementById("sunIcon");
  const moonIcon = document.getElementById("moonIcon");

  // Toggle dark mode on the HTML element
  htmlElement.classList.toggle("dark");

  // Toggle icon visibility based on dark mode state
  if (htmlElement.classList.contains("dark")) {
    // Dark mode active, show moon icon, hide sun icon
    sunIcon.classList.add("hidden");
    moonIcon.classList.remove("hidden");
  } else {
    // Dark mode inactive, show sun icon, hide moon icon
    sunIcon.classList.remove("hidden");
    moonIcon.classList.add("hidden");
  }
}
function toggleMenu() {
  const menu = document.getElementById("menu");
  menu.classList.toggle("hidden");
}



// fungsi tombol ^
function toggleMenu() {
  const menu = document.getElementById("menu");
  const hamburgerIcon = document.getElementById("hamburgerIcon");
  const closeIcon = document.getElementById("closeIcon");

  menu.classList.toggle("hidden");
  hamburgerIcon.classList.toggle("hidden");
  closeIcon.classList.toggle("hidden");
}

//fungsi atas bawah
window.onscroll = function () {
    const button = document.getElementById("scrollToTop");

    // Cek jika scroll lebih dari 200px, tampilkan tombol
    if (
      document.body.scrollTop > 200 ||
      document.documentElement.scrollTop > 200
    ) {
      button.classList.remove("hidden"); // Menampilkan tombol
    } else {
      button.classList.add("hidden"); // Menyembunyikan tombol
    }
  };

  // Fungsi untuk menggulir ke atas saat tombol diklik
  document.getElementById("scrollToTop").onclick = function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth", // Scroll halus ke atas
    });
  };

// slider gambar

document.addEventListener('DOMContentLoaded', function () {
    const images = [
        document.getElementById('image-slider-1'),
        document.getElementById('image-slider-2')
    ];

    let currentImageIndex = 0;

    // Function to swap images
    function swapImages() {
        // Hide current image
        images[currentImageIndex].style.opacity = '0';

        // Update the current image index
        currentImageIndex = (currentImageIndex + 1) % images.length;

        // Show the next image
        images[currentImageIndex].style.opacity = '1';
    }

    // Set interval to swap images every 3 seconds (adjustable)
    setInterval(swapImages, 3000);
});



// banner
    const closeButton = document.getElementById("closeBanner");
    const banner = document.getElementById("banner");

    closeButton.addEventListener("click", function () {
        banner.style.display = "none"; // Hides the banner when the close button is clicked
    });

    // Optional: Automatically hide the banner after a few seconds
    setTimeout(function () {
        banner.style.display = "none";
    }, 5000); // Hides the banner after 5 seconds





