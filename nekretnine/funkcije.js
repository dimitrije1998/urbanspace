document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("searchForm");
  const input = document.getElementById("searchInput");
  const resetBtn = document.getElementById("resetBtn");
  const resultsInfo = document.getElementById("resultsInfo");

  const cols = Array.from(document.querySelectorAll(".property-card")).map(card => ({
    card,
    col: card.closest(".col-lg-3, .col-md-6, .col-sm-12") || card.parentElement
  }));

  function showAll() {
    cols.forEach(({col}) => col.classList.remove("d-none"));
    if (resultsInfo) resultsInfo.textContent = "";
  }

  function filterByPlace(queryRaw) {
    const q = (queryRaw || "").trim().toLowerCase();
    if (!q) { showAll(); return; }

    let shown = 0;
    cols.forEach(({card, col}) => {
      const place = (card.querySelector("small")?.textContent || "").toLowerCase();
      const title = (card.querySelector("h6")?.textContent || "").toLowerCase();
      if ((place + " " + title).includes(q)) {
        col.classList.remove("d-none"); shown++;
      } else {
        col.classList.add("d-none");
      }
    });
    resultsInfo.textContent = shown ? `Pronađeno: ${shown}` : "Nema rezultata za uneti pojam.";
  }

  form.addEventListener("submit", (e) => {
    e.preventDefault();
    filterByPlace(input.value);
  });

  resetBtn.addEventListener("click", () => {
    input.value = "";
    showAll();
  });
});