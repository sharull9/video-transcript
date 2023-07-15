function openFilterOption() {}

function openMobileMenu(e) {
  let item = e.target.parentElement;
  item.classList.add("open");
}
function closeMobileMenu(e) {
  let item = e.target.parentElement.parentElement;
  item.classList.remove("open");
}

function truncate(str, maxlength) {
  return str.length > maxlength ? str.slice(0, maxlength - 1) + "…" : str;
}

function openVideoMenu(e) {
  let menu = e.target.parentElement;
  menu.classList.toggle("open");
}

function openPlaylist(e) {
  let playlist = e.target.parentElement.parentElement;
  playlist.classList.toggle("open");
}

function toggleDarkMode(e) {
  let item = e.target;
  document.documentElement.classList.toggle("dark");

  if (document.documentElement.classList.contains("dark")) {
    item.innerText = "light_mode";
  } else {
    item.innerText = "dark_mode";
  }
  if (
    localStorage.theme === "dark" ||
    (!("theme" in localStorage) &&
      window.matchMedia("(prefers-color-scheme: dark)").matches)
  ) {
    document.documentElement.classList.add("dark");
  } else {
    document.documentElement.classList.remove("dark");
  }
}

// fdata.append("question_image", $('#question_image')[0].files[0]);

async function uploadVideo(e) {
  e.preventDefault();

  let formData = new FormData(e.target);

  let res = await fetch("/upload-video", {
    method: "POST",
    body: formData,
  });
  let data = await res.json();

  if (data.status === "success") {
    document.getElementById("success").classList.remove("hidden");
  } else {
    document.getElementById("success").classList.add("hidden");
  }
  if (data.status === "failed") {
    document.getElementById("failed").classList.remove("hidden");
  } else {
    document.getElementById("failed").classList.add("hidden");
  }
}
