const searchCharacter = async (ev) => {
  // ev.preventDefault();
  try {
    const response = await fetch(
      `https://rickandmortyapi.com/api/character?name=${ev.value}`
    );
    const jsonResponse = await response.json();
    console.log(jsonResponse);
    const resultsBox = document.getElementById("response");
    resultsBox.innerHTML = null
    const ul = document.createElement("ul");
    for (let index = 0; index < 3; index++) {
        if(jsonResponse.results[index]){
            const characterLi = createCharacterItem(jsonResponse.results[index]);
            ul.appendChild(characterLi);
        }
    }

    resultsBox.appendChild(ul)
    console.log(jsonResponse.results.length);
    jsonResponse.results.length > 0
      ? (resultsBox.style.display = "block")
      : (resultsBox.style.display = "none");
  } catch (e) {
    console.log(e);
  }
};
// Ocultar la response box al salir del input
window.onload = () => {
  const searchInput = document.getElementById("search-input");
  searchInput.addEventListener("blur", () => {
    setTimeout(() => {
      const resultsBox = document.getElementById("response");
      resultsBox.style.display = "none";
    }, 300);
  });
};

const createCharacterItem = (ch) => {
    const li = document.createElement("li");
    const img = document.createElement("img");
    const name = document.createElement("span");
    const container = document.createElement("div");
    const a = document.createElement("a");
    a.href = window.location.origin + `/character/get_data/${ch.id}`
    img.src = ch.image;
    name.innerText = ch.name;
    container.appendChild(img);
    container.appendChild(name);
    a.appendChild(container)
    li.appendChild(a)
    return li;
}