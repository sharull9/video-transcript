async function getAccessToken() {
  if (localStorage.getItem("accessToken")) {
    let created = localStorage.getItem("accessTokenCreationTime");
    let current = new Date().getTime();
    if (current - created > 10 * 60 * 1000) {
      return await refreshAccessToken();
    }
    return localStorage.getItem("accessToken");
  } else {
    return await refreshAccessToken();
  }
}

function getVideoId() {
  // let videoId = document.getElementById("videoId").value;
  let videoId = window.location.pathname.split("/")[2];
  return videoId;
}

function getApiCredentials() {
  let location = "Trial";
  let accountId = "6ed32686-5190-472a-992b-34e9430294d1";
  return { location, accountId };
}

async function refreshAccessToken() {
  let { location, accountId } = getApiCredentials();
  let res = await fetch(
    `https://api.videoindexer.ai/Auth/${location}/Accounts/${accountId}/AccessToken`,
    {
      headers: {
        "Ocp-Apim-Subscription-Key": "99198a8cd5da4c03bdb75761c7fbd99e",
      },
    }
  );
  let data = await res.json();
  localStorage.setItem("accessToken", data);
  localStorage.setItem("accessTokenCreationTime", new Date().getTime());

  return data;
}

function cleanDiv(id) {
  document.getElementById(id).innerHTML = "";
}


function showDiv(id, type) {
  if (document.getElementById(id + "-transcript")) {
    document.getElementById(id + "-transcript").classList.add('hidden');
  }
  if (document.getElementById(id + "-ocr")) {
    document.getElementById(id + "-ocr").classList.add('hidden');
  }
  if (document.getElementById(id + "-matchTranscript")) {
    document.getElementById(id + "-matchTranscript").classList.add('hidden');

  }
  if (document.getElementById(id + "-other")) {
    document.getElementById(id + "-other").classList.add('hidden');
  }
  document.getElementById(id + "-" + type).classList.remove('hidden');


  if (document.getElementById("tab" + "-" + id + "-transcript")) {
    document.getElementById("tab" + "-" + id + "-transcript").classList.remove('active');
  }
  if (document.getElementById("tab" + "-" + id + "-ocr")) {
    document.getElementById("tab" + "-" + id + "-ocr").classList.remove('active');
  }
  if (document.getElementById("tab" + "-" + id + "-other")) {
    document.getElementById("tab" + "-" + id + "-other").classList.remove('active');
  }
  if (document.getElementById("tab" + "-" + id + "-matchTranscript")) {
    document.getElementById("tab" + "-" + id + "-matchTranscript").classList.remove('active');
  }
  document.getElementById("tab" + "-" + id + "-" + type).classList.add('active');

}