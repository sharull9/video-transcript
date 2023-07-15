async function getVideo() {
  let videoId = getVideoId();
  let accessToken = await getAccessToken();
  let { location, accountId } = getApiCredentials();
  showLoader();
  let path = `https://api.videoindexer.ai/${location}/Accounts/${accountId}/Videos/${videoId}/Index?includedInsights=transcript&includeSummarizedInsights=true&accessToken=${accessToken}`;
  let res = await fetch(path, {
    method: "GET",
  });
  createStats("stats", videoId);
  let data = await res.json();
  let resultData = data.videos[0].insights.transcript;
  document.getElementById("title").innerText = data.name;
  document.getElementById("description").innerText = data.description;
  checkLocalVideo(videoId, accessToken, accountId);
  let searchQuery;
  let query = new URLSearchParams(window.location.search);

  for (const [key, value] of query) {
    if (key == "query") {
      document
        .getElementById("tab-" + videoId + "-matchTranscript")
        .classList.remove("hidden");
      document
        .getElementById("tab-" + videoId + "-ocr")
        .classList.remove("hidden");
      document
        .getElementById("tab-" + videoId + "-other")
        .classList.remove("hidden");
      searchQuery = value;
      await videoMatchTranscript(
        videoId,
        accessToken,
        accountId,
        location,
        searchQuery
      );
    }
    if (key == "startTime") {
      updateVideoTime(value);
    }
  }

  resultData.forEach(async (data) => {
    let time = data.instances[0].adjustedStart;
    let transcript = data.text;
    for (const [key, value] of query) {
      if (key == "query") {
        const regex = new RegExp(value, "gi");
        transcript = transcript.replace(
          regex,
          '<mark class="bg-yellow-200">$&</mark>'
        );
      }
    }
    if (time.includes(".")) {
      time = time.split(".")[0];
    }
    let speakerId = data.speakerId;
    generateVideoTranscript(videoId + "-transcript", time, transcript, speakerId);
  });
  hideLoader();
}
function checkLocalVideo(videoId, accessToken, accountId) {
  let localVideoIds = document.getElementById("videoIds").value;
  let item;
  localVideoIds.split(",").forEach((localVideoId) => {
    if (localVideoId == videoId + ".mp4") {
      item = `<video id="player" controlslist controls class="w-full aspect-video"><source src="/dist/videos/${videoId}.mp4" type="video/mp4"></video>`;
    }
  });
  if (item == null) {
    item = `<iframe id="frame" src="https://www.videoindexer.ai/embed/player/${accountId}/${videoId}/?accessToken=${accessToken}&locale=en&location=trial" class="w-full aspect-video" frameborder="0" allowfullscreen></iframe>`;
  }
  document.getElementById("videoPlayer").innerHTML = item;
}
async function videoMatchTranscript(
  videoId,
  accessToken,
  accountId,
  location,
  searchQuery
) {
  let path = `https://api.videoindexer.ai/${location}/Accounts/${accountId}/Videos/Search?query=${searchQuery}&sourceVideoId=${videoId}&accessToken=${accessToken}`;
  let res = await fetch(path);
  let data = await res.json();

  data.results[0].searchMatches.forEach((result) => {
    if (result.type == "Transcript") {
      if (result.startTime.includes(".")) {
        result.startTime = result.startTime.split(".")[0];
      }
      singleVideoSearchTranscript(
        videoId + "-matchTranscript",
        videoId,
        result.startTime,
        result.text,
        result.exactText,
        searchQuery
      );
    } else if (result.type == "Ocr") {
      if (result.startTime.includes(".")) {
        result.startTime = result.startTime.split(".")[0];
      }
      singleVideoSearchTranscript(
        videoId + "-ocr",
        videoId,
        result.startTime,
        result.text,
        result.exactText,
        searchQuery
      );
    } else {
      singleVideoSearchTranscript(
        videoId + "-other",
        videoId,
        result.startTime,
        `${result.type}: ${result.text}`,
        result.exactText,
        searchQuery
      );
    }
  });
}
function createStats(parentId, id) {
  let item = `
  <div class="flex gap-2 px-2 sticky w-full top-0 left-0 right-0 bg-white">
          <button id="tab-${id}-transcript" class="group active" onclick="showDiv('${id}', 'transcript')">
            <p class="px-4 py-2 group-[.active]:text-blue-600 group-[.active]:border-b-2 group-[.active]:border-blue-600 group-[.active]:bg-white">
              Transcript
            </p>
          </button>
          <button id="tab-${id}-matchTranscript" class="group hidden" onclick="showDiv('${id}', 'matchTranscript')">
            <p class="px-4 py-2 group-[.active]:text-blue-600 group-[.active]:border-b-2 group-[.active]:border-blue-600 group-[.active]:bg-white">
              Matched Transcript
            </p>
          </button>
          <button id="tab-${id}-ocr" class="group hidden" onclick="showDiv('${id}', 'ocr')">
            <p class="px-4 py-2  group-[.active]:text-blue-600 group-[.active]:border-b-2 group-[.active]:border-blue-600 group-[.active]:bg-white">
              Matched OCR
            </p>
          </button>
          <button id="tab-${id}-other" class="group hidden" onclick="showDiv('${id}', 'other')">
            <p class="px-4 py-2  group-[.active]:text-blue-600 group-[.active]:border-b-2 group-[.active]:border-blue-600 group-[.active]:bg-white">
              Others
            </p>
          </button>
        </div>
        <div id="${id}-transcript" class="result w-full border mt-3 border-slate-300 rounded-lg grid grid-cols-1 divide-y"></div>
        <div id="${id}-matchTranscript" class="hidden w-full divide-y"></div>
        <div id="${id}-ocr" class="hidden w-full divide-y"></div>
        <div id="${id}-other" class="hidden w-full divide-y"></div>
      </div>
  `;
  document.getElementById(parentId).innerHTML = item;
}
function showLoader() {
  document.getElementById("video-status").classList.remove("hidden");
  document.getElementById("stats-container").classList.add("hidden");
}
function hideLoader() {
  document.getElementById("stats-container").classList.remove("hidden");
  document.getElementById("stats-container").classList.add("flex");
  document.getElementById("video-status").classList.add("hidden");
}
function generateSearchVideoTranscript(
  id,
  videoId,
  time,
  transcript,
  searchText,
  searchQuery
) {
  searchQuery.split(" ").forEach((item) => {
    if (item.toLowerCase() == searchText.toLowerCase()) {
      // const pattern = /\<mark(.*)\>searchText\<\/mark\>/i
      // const regex2 = new RegExp(`/\<mark(.*)\>${searchText}\<\/mark\>/i`, "gi");
      const regex = new RegExp(searchText, "gi");
      transcript = exactSearchText(transcript, searchQuery);
      transcript = transcript.replace(
        regex,
        '<mark class="bg-yellow-200">$&</mark>'
      );
      // let transcript2 = transcript.replace(regex2, '<mark class="">$&</mark>');
      // console.log(transcript2)
      // transcript = searchText(transcript, searchText);
      document.getElementById(id).innerHTML += `
    <div class="p-2 py-2 cursor-pointer">
    <a href="/video/${videoId}?query=${searchText}&startTime=${time}">
        <div class="py-2 flex gap-6 rounded-lg group hover:bg-blue-300/20 pointer-cursor">
          <div class="w-24 flex items-center">
            <span class="material-symbols-outlined opacity-0 text-blue-800 group-hover:opacity-100 group-[.active]:opacity-100">
              play_arrow
            </span>
            <span class="text-[12px] text-slate-950 bg-gray-200 px-2 py-1 rounded-lg group-[.active]:text-slate-800">${time}</span>
          </div>
          <div class="w-full flex items-center">
            <p class="text-sm">
              ${transcript}
            </p>
          </div>
        </div>
        </a>
      </div>
    `;
    }
  });
}
function singleVideoSearchTranscript(
  id,
  videoId,
  time,
  transcript,
  searchText,
  searchQuery
) {
  if (searchQuery.toLowerCase() == searchText.toLowerCase()) {
    // const pattern = /\<mark(.*)\>searchText\<\/mark\>/i
    // const regex2 = new RegExp(`/\<mark(.*)\>${searchText}\<\/mark\>/i`, "gi");
    const regex = new RegExp(searchText, "gi");
    transcript = exactSearchText(transcript, searchQuery);
    transcript = transcript.replace(
      regex,
      '<mark class="bg-yellow-200">$&</mark>'
    );
    // let transcript2 = transcript.replace(regex2, '<mark class="">$&</mark>');
    // console.log(transcript2)
    // transcript = searchText(transcript, searchText);
    document.getElementById(id).innerHTML += `
    <div class="p-2 py-2 cursor-pointer">
        <div class="py-2 flex gap-6 rounded-lg group hover:bg-blue-300/20 pointer-cursor" onclick="updateVideoTime('${time}')">
          <div class="w-24 flex items-center">
            <span class="material-symbols-outlined opacity-0 text-blue-800 group-hover:opacity-100 group-[.active]:opacity-100">
              play_arrow
            </span>
            <span class="text-[12px] text-slate-950 bg-gray-200 px-2 py-1 rounded-lg group-[.active]:text-slate-800">${time}</span>
          </div>
          <div class="w-full flex items-center">
            <p class="text-sm">
              ${transcript}
            </p>
          </div>
        </div>
      </div>
    `;
  }
}
function searchText(transcript, searchText) {
  const regex = new RegExp(searchText, "gi");
  transcript = transcript.replace(
    regex,
    '<mark class="bg-yellow-200">$&</mark>'
  );
  return transcript;
}
function exactSearchText(transcript, searchText) {
  const regex = new RegExp(searchText, "gi");
  transcript = transcript.replace(
    regex,
    '<mark class="bg-green-200">$&</mark>'
  );
  return transcript;
}
function generateVideoTranscript(id, time, transcript, speakerId) {
  document.getElementById(id).innerHTML += `
    <div class="p-2 py-2 cursor-pointer">
        <div class="py-2 flex gap-6 rounded-lg group hover:bg-blue-300/20 pointer-cursor" onclick="updateVideoTime('${time}')">
          <div class="w-24 flex items-center">
            <span class="material-symbols-outlined opacity-0 text-blue-800 group-hover:opacity-100 group-[.active]:opacity-100">
              play_arrow
            </span>
            <span class="text-[12px] text-slate-950 bg-gray-200 px-2 py-1 rounded-lg group-[.active]:text-slate-800">${time}</span>
          </div>
          <div class="w-full flex items-center">
            <p class="text-sm">
              ${transcript}
            </p>
          </div>
          <div class="flex items-center" style="width:100px;">
            <p class="text-sm">
              Speaker ${speakerId}
            </p>
          </div>
        </div>
      </div>
    `;
}
function updateVideoTime(time) {
  if (time.includes(":")) {
    let hour = Number(time.split(":")[0] * 60);
    let minutes = Number(time.split(":")[1] * 60);
    let seconds = Number(time.split(":")[2]);
    let updateTime = hour + minutes + seconds;
    time = updateTime;
  } else {
    time = time;
  }

  if (document.getElementById("player")) {
    document.getElementById("player").currentTime = time;
  }
  if (document.getElementById("frame")) {
    document.getElementById("frame").contentWindow.document.getElementById =
      time;
  }
  // document.getElementById("player").currentTime = time;
}
async function downloadVideo() {
  let videoId = getVideoId();
  let accessToken = await getAccessToken();
  let { location, accountId } = getApiCredentials();
  let path = `https://api.videoindexer.ai/${location}/Accounts/${accountId}/Videos/${videoId}/SourceFile/DownloadUrl?accessToken=${accessToken}`;
  let res = await fetch(path);
  let data = await res.json();
  window.open(data, "_blank");
}
async function getVideoList() {
  let accessToken = await getAccessToken();
  let { location, accountId } = getApiCredentials();
  let path = `https://api.videoindexer.ai/${location}/Accounts/${accountId}/Videos/Search?accessToken=${accessToken}`;
  let res = await fetch(path);
  let data = await res.json();
  data.results.forEach(async (result) => {
    let thumbanil = await getThumbanil(result.id, result.thumbnailId);
    createVideoList("featured-list", result.id, thumbanil, result.name);
    createVideoList("recent-list", result.id, thumbanil, result.name);
  });
}
async function getBookmark() {
  let accessToken = await getAccessToken();
  let { location, accountId } = getApiCredentials();
  let path = `https://api.videoindexer.ai/${location}/Accounts/${accountId}/Videos/Search?accessToken=${accessToken}`;
  let res = await fetch(path);
  let data = await res.json();
  data.results.forEach(async (result) => {
    let thumbanil = await getThumbanil(result.id, result.thumbnailId);
    createListVideo(
      "bookmark-list",
      result.id,
      result.description,
      thumbanil,
      result.name
    );
  });
}
async function getArchives() {
  let accessToken = await getAccessToken();
  let { location, accountId } = getApiCredentials();
  let path = `https://api.videoindexer.ai/${location}/Accounts/${accountId}/Videos/Search?accessToken=${accessToken}`;
  let res = await fetch(path);
  let data = await res.json();
  data.results.forEach(async (result) => {
    let thumbanil = await getThumbanil(result.id, result.thumbnailId);
    createListVideo(
      "archives-list",
      result.id,
      result.description,
      thumbanil,
      result.name
    );
  });
}
async function getPlaylist() {
  let accessToken = await getAccessToken();
  let { location, accountId } = getApiCredentials();
  let path = `https://api.videoindexer.ai/${location}/Accounts/${accountId}/Videos/Search?accessToken=${accessToken}`;
  let res = await fetch(path);
  let data = await res.json();
  data.results.forEach(async (result) => {
    let thumbanil = await getThumbanil(result.id, result.thumbnailId);
    createListVideo(
      "playlist-video",
      result.id,
      result.description,
      thumbanil,
      result.name
    );
  });
}
async function getHouseVideo() {
  let accessToken = await getAccessToken();
  let { location, accountId } = getApiCredentials();
  let path = `https://api.videoindexer.ai/${location}/Accounts/${accountId}/Videos/Search?accessToken=${accessToken}`;
  let res = await fetch(path);
  let data = await res.json();
  data.results.forEach(async (result) => {
    let thumbanil = await getThumbanil(result.id, result.thumbnailId);
    createVideoList("house-list", result.id, thumbanil, result.name);
  });
}
function createListVideo(parent, id, description, thumbnail, name) {
  if (description == null) description = "";
  let item = `
  <div class="w-full h-full grid grid-cols-12 gap-4">
                        <div class="col-span-4 lg:col-span-2">
                        <a href="/video/${id}">
                            <img src="${thumbnail}" class="object-cover w-full aspect-video rounded-lg" alt="">
                            </a>
                        </div>
                        <div class="col-span-7 lg:col-span-9">
                            <h4 class="text-base lg:text-xl truncate">
                               ${name}
                            </h4>
                            <p class="text-sm text-gray-400 truncate">
                                 ${description}
                            </p>
                            <div class="flex gap-4 mt-1 lg:mt-2 items-center">
                                <p class="">
                                    <span class="text-semibold text-slate-500 dark:text-slate-300 text-sm">Speaker:</span>
                                    Modi
                                </p>
                                <div class="hidden lg:flex gap-4">
                                    <p class="text-sm">
                                        Jan 26, 2023
                                    </p>
                                    <p class="text-sm">
                                        Rajya Sabha
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 lg:col-span-1 flex items-start justify-end relative group">
                            <span class="material-symbols-outlined cursor-pointer" onclick="openVideoMenu(event)">
                                more_vert
                            </span>
                            <div class="absolute hidden group-[.open]:flex flex-col justify-stretch bg-white border p-2 -left-36 lg:-left-16 w-[140px] rounded-lg">
                                <button class="flex items-center justify-start text-red-400 px-2 py-1 rounded-lg hover:bg-gray-100">
                                    <span class="material-symbols-outlined">
                                        delete
                                    </span>
                                    <span class="">
                                        Remove
                                    </span>
                                </button>

                            </div>
                        </div>
                    </div>
  `;
  document.getElementById(parent).innerHTML += item;
}
function createVideoList(parent, id, thumbnail, name) {
  let item = `
  <div class="w-full h-full rounded-lg border-[5px] border-white dark:bg-white/10 dark:border-none dark:p-2 shadow cursor-pointer overflow-hidden">
      <a href="/video/${id}" class="block">
      <div>
      <img
        src="${thumbnail}"
        class="object-cover aspect-video w-full rounded-lg"
        alt=""
      />
      
      </div>
      
      <div class="py-3 px-1">
          <h4 class="text-base mb-3">
              ${name}
          </h4>
          <div class="grid grid-cols-2 gap-1 items-center">
              <p class="text-sm bg-gray-100 rounded p-2 dark:text-gray-900">
                  Jan 26, 2023
              </p>
  
              <p class="text-sm bg-gray-100 rounded p-2 dark:text-gray-900">
                  Rajya Sabha
              </p>
          </div>
          <p class="mt-2">
              <span class="text-semibold text-slate-500 dark:text-slate-300 text-sm">Speaker:</span>
              Modi
          </p>
      </div>
      </a>
  </div>`;
  document.getElementById(parent).innerHTML += item;
}
async function getThumbanil(id, thumbnailId) {
  let accessToken = await getAccessToken();
  let { location, accountId } = getApiCredentials();
  let path = `https://api.videoindexer.ai/${location}/Accounts/${accountId}/Videos/${id}/Thumbnails/${thumbnailId}?format=Jpeg&accessToken=${accessToken}`;
  let data = await fetch(path);
  return data.url;
}
async function searchQuery(e) {
  e.preventDefault();
  let subscriptionId = "2a172a3240e7407d8943d823210caa3c";
  let subscriptionRegion = "centralindia";
  let value = document.getElementById("search-query").value;
  let type = document.getElementById("match-type").value;

  if (type == "1") {
    let res = await fetch(
      `https://api.cognitive.microsofttranslator.com/translate?api-version=3.0&to=hi-IN`,
      {
        headers: {
          "Ocp-Apim-Subscription-Key": subscriptionId,
          "Ocp-Apim-Subscription-Region": subscriptionRegion,
          "Content-Type": "application/json",
        },
        method: "POST",
        body: JSON.stringify([{ Text: value }]),
      }
    );
    let data = await res.json();
    let hindiWord = data[0].translations[0].text;
    let newFetch = await fetch(
      `https://api.cognitive.microsofttranslator.com/dictionary/lookup?api-version=3.0&from=hi-IN&to=en-US&to=hi-IN`,
      {
        headers: {
          "Ocp-Apim-Subscription-Key": subscriptionId,
          "Ocp-Apim-Subscription-Region": subscriptionRegion,
          "Content-Type": "application/json",
        },
        method: "POST",
        body: JSON.stringify([{ Text: hindiWord }]),
      }
    );
    let newData = await newFetch.json();
    let keywords = new Set([]);
    newData[0].translations.forEach((item) => {
      keywords.add(item.displayTarget);

      item.backTranslations.forEach((text) => {
        keywords.add(text.displayText);
      });
    });
    let key = "";
    for (let i of keywords) {
      key += i + " ";
    }
    value = key;
  }
  window.location.href = "/search?query=" + value;
}
async function getSearchResult() {
  let accessToken = await getAccessToken();
  let { location, accountId } = getApiCredentials();
  let query;
  let videoTime;
  let searchPara = new URLSearchParams(window.location.search);
  for (let [key, value] of searchPara) {
    if (key == "query") {
      query = value;
      document.getElementById("search-query").value = value;
    }
    if (key == "startTime") {
      videoTime = value;
    }
  }
  let path = `https://api.videoindexer.ai/${location}/Accounts/${accountId}/Videos/Search?query=${query}&accessToken=${accessToken}`;
  let res = await fetch(path);
  let data = await res.json();

  cleanDiv("search-result");
  if (data.results.length == 0) {
    document.getElementById("search-result").innerHTML += "No Result Found";
  }
  data.results.forEach(async (result) => {
    let thumbanil = await getThumbanil(result.id, result.thumbnailId);
    searchVideoList("search-result", result.id, thumbanil, result.name);
    result.searchMatches.forEach((match) => {
      if (match.type == "Transcript") {
        if (match.startTime.includes(".")) {
          match.startTime = match.startTime.split(".")[0];
        }
        generateSearchVideoTranscript(
          result.id + "-transcript",
          result.id,
          match.startTime,
          match.text,
          match.exactText,
          query
        );
      } else if (match.type == "Ocr") {
        if (match.startTime.includes(".")) {
          match.startTime = match.startTime.split(".")[0];
        }
        generateSearchVideoTranscript(
          result.id + "-ocr",
          result.id,
          match.startTime,
          match.text,
          match.exactText,
          query
        );
      } else {
        generateSearchVideoTranscript(
          result.id + "-other",
          result.id,
          match.startTime,
          `${match.type}: ${match.text}`,
          match.exactText,
          query
        );
      }
    });
  });
}
function searchVideoList(parent, id, thumbnail, name) {
  let item = `
  <div class="w-full h-full rounded-lg border-[5px] border-white dark:bg-white/10 dark:border-none dark:p-2 shadow cursor-pointer overflow-hidden grid grid-cols-1 lg:grid-cols-4">
      <a href="/video/${id}" class="block">
      <div>
      <img
        src="${thumbnail}"
        class="object-cover aspect-video w-full rounded-lg"
        alt=""
      />
      
      </div>
      
      <div class="py-3 px-1">
          <h4 class="text-base mb-3">
              ${name}
          </h4>
          <div class="grid grid-cols-2 gap-1 items-center">
              <p class="text-sm bg-gray-100 rounded p-2 dark:text-gray-900">
                  Jan 26, 2023
              </p>
  
              <p class="text-sm bg-gray-100 rounded p-2 dark:text-gray-900">
                  Rajya Sabha
              </p>
          </div>
          <p class="mt-2">
              <span class="text-semibold text-slate-500 dark:text-slate-300 text-sm">Speaker:</span>
              Modi
          </p>
      </div>
      </a>
      <div class="lg:col-span-3 max-h-[270px] overflow-y-auto relative">
        <div class="flex gap-2 px-2 sticky w-full top-0 left-0 right-0 bg-white">
          <button id="tab-${id}-transcript" class="group active" onclick="showDiv('${id}', 'transcript')">
            <p class="px-4 py-2 group-[.active]:text-blue-600 border-b-2 border-white group-[.active]:border-blue-600 group-[.active]:bg-white">
              Matched Transcript
            </p>
          </button>
          <button id="tab-${id}-ocr" class="group" onclick="showDiv('${id}', 'ocr')">
            <p class="px-4 py-2  group-[.active]:text-blue-600 border-b-2 border-white group-[.active]:border-blue-600 group-[.active]:bg-white">
              Matched OCR
            </p>
          </button>
          <button id="tab-${id}-other" class="group" onclick="showDiv('${id}', 'other')">
            <p class="px-4 py-2  group-[.active]:text-blue-600 border-b-2 border-white group-[.active]:border-blue-600 group-[.active]:bg-white">
              Others
            </p>
          </button>
        </div>
        <div id="${id}-transcript" class=""></div>
        <div id="${id}-ocr" class="hidden"></div>
        <div id="${id}-other" class="hidden"></div>
      </div>
  </div>`;
  document.getElementById(parent).innerHTML += item;
}
