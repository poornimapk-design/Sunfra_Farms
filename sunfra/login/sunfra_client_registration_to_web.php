<?php
date_default_timezone_set("Asia/Kolkata");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Client</title>
  <style>
    :root {
      --bg-1: #07111f;
      --bg-2: #0f172a;
      --panel: rgba(255, 255, 255, 0.92);
      --panel-border: rgba(148, 163, 184, 0.18);
      --text: #0f172a;
      --muted: #64748b;
      --primary: #2563eb;
      --primary-2: #7c3aed;
      --success: #15803d;
      --danger: #b91c1c;
      --shadow: 0 20px 60px rgba(2, 6, 23, 0.18);
      --radius: 24px;
    }

    * { box-sizing: border-box; }

    body {
      margin: 0;
      font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
      color: var(--text);
      min-height: 100vh;
      background:
        radial-gradient(circle at top left, rgba(37, 99, 235, 0.18), transparent 30%),
        radial-gradient(circle at top right, rgba(124, 58, 237, 0.14), transparent 26%),
        linear-gradient(180deg, #f8fbff 0%, #eef2ff 50%, #f8fafc 100%);
    }

    .content {
      padding: 24px;
    }

    .page {
      max-width: 1280px;
      margin: 0 auto;
    }

    .hero {
      position: relative;
      overflow: hidden;
      border-radius: 30px;
      padding: 28px;
      color: #fff;
      background: linear-gradient(135deg, var(--bg-1), #1d4ed8 48%, #7c3aed 100%);
      box-shadow: var(--shadow);
      border: 1px solid rgba(255, 255, 255, 0.12);
    }

    .hero::after {
      content: "";
      position: absolute;
      width: 280px;
      height: 280px;
      border-radius: 50%;
      right: -80px;
      bottom: -110px;
      background: rgba(255, 255, 255, 0.08);
      filter: blur(2px);
    }

    .hero-top {
      position: relative;
      z-index: 1;
      display: flex;
      gap: 16px;
      align-items: flex-start;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .eyebrow {
      display: inline-flex;
      gap: 8px;
      align-items: center;
      padding: 8px 12px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.12);
      border: 1px solid rgba(255, 255, 255, 0.14);
      font-size: 13px;
      margin-bottom: 12px;
    }

    .hero h1 {
      margin: 0 0 10px;
      font-size: clamp(30px, 4vw, 46px);
      line-height: 1.04;
      letter-spacing: -0.04em;
    }

    .hero p {
      margin: 0;
      max-width: 760px;
      color: rgba(255, 255, 255, 0.82);
      font-size: 15px;
      line-height: 1.6;
    }

    .hero-actions {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      align-items: center;
      position: relative;
      z-index: 1;
    }

    .button,
    .link-button {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      appearance: none;
      border: 0;
      border-radius: 14px;
      padding: 12px 16px;
      font-weight: 700;
      font-size: 14px;
      cursor: pointer;
      text-decoration: none;
      transition: transform .16s ease, box-shadow .16s ease, background .16s ease, opacity .16s ease;
    }

    .button:hover,
    .link-button:hover {
      transform: translateY(-1px);
    }

    .button:active,
    .link-button:active {
      transform: translateY(0);
    }

    .button.primary,
    .link-button.primary {
      color: #fff;
      background: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
      box-shadow: 0 12px 26px rgba(22, 163, 74, 0.28);
    }

    .button.secondary {
      color: #e2e8f0;
      background: rgba(255, 255, 255, 0.12);
      border: 1px solid rgba(255, 255, 255, 0.16);
    }

    .button.ghost {
      color: #0f172a;
      background: #fff;
      border: 1px solid #dbe3f1;
    }

    .button.small {
      padding: 9px 12px;
      border-radius: 12px;
      font-size: 13px;
    }

    .metrics {
      position: relative;
      z-index: 1;
      display: grid;
      grid-template-columns: repeat(4, minmax(0, 1fr));
      gap: 14px;
      margin-top: 16px;
    }

    .metric {
      padding: 16px;
      border-radius: 20px;
      background: rgba(255, 255, 255, 0.12);
      border: 1px solid rgba(255, 255, 255, 0.14);
      backdrop-filter: blur(12px);
    }

    .metric .label {
      margin-left: 0;
      display: block;
      text-transform: uppercase;
      letter-spacing: .08em;
      font-size: 12px;
      color: rgba(226, 232, 240, 0.78);
      margin-bottom: 8px;
    }

    .metric .value {
      font-size: 24px;
      font-weight: 800;
      line-height: 1;
    }

    .metric .note {
      margin-top: 6px;
      font-size: 13px;
      color: rgba(226, 232, 240, 0.78);
    }

    .grid {
      display: grid;
      grid-template-columns: 360px minmax(0, 1fr);
      gap: 18px;
      margin-top: 18px;
      align-items: start;
    }

    .panel {
      background: var(--panel);
      border: 1px solid var(--panel-border);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      backdrop-filter: blur(14px);
    }

    .panel-head {
      padding: 20px 20px 0;
    }

    .panel-head h2 {
      margin: 0 0 6px;
      font-size: 20px;
      letter-spacing: -0.02em;
    }

    .panel-head p {
      margin: 0;
      color: var(--muted);
      font-size: 14px;
      line-height: 1.5;
    }

    .panel-body {
      padding: 20px;
    }

    .stack {
      display: grid;
      gap: 14px;
    }

    .field label {
      display: block;
      margin: 0 0 8px;
      font-size: 13px;
      font-weight: 700;
      color: #334155;
    }

    .input {
      width: 100%;
      border: 1px solid #d7e0ee;
      background: rgba(255, 255, 255, 0.96);
      color: #0f172a;
      border-radius: 14px;
      padding: 13px 14px;
      font-size: 14px;
      outline: none;
      transition: border-color .16s ease, box-shadow .16s ease, transform .16s ease;
    }

    .input:focus {
      border-color: rgba(37, 99, 235, 0.65);
      box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12);
    }

    .helper {
      margin-top: 7px;
      font-size: 12px;
      color: var(--muted);
    }

    .toolbar {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 14px;
    }

    .search-wrap {
      flex: 1;
      min-width: 220px;
    }

    .search {
      width: 100%;
      border: 1px solid #d7e0ee;
      background: rgba(255, 255, 255, 0.96);
      border-radius: 14px;
      padding: 13px 14px;
      font-size: 14px;
      outline: none;
    }

    .search:focus {
      border-color: rgba(37, 99, 235, 0.65);
      box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12);
    }

    .status {
      min-height: 24px;
      margin-top: 12px;
      padding: 12px 14px;
      border-radius: 14px;
      display: none;
      font-size: 14px;
      line-height: 1.45;
    }

    .status.show { display: block; }
    .status.success {
      display: block;
      color: #166534;
      background: #ecfdf5;
      border: 1px solid #bbf7d0;
    }
    .status.error {
      display: block;
      color: #991b1b;
      background: #fef2f2;
      border: 1px solid #fecaca;
    }

    .editing-badge {
      display: none;
      margin-bottom: 14px;
      padding: 10px 12px;
      border-radius: 14px;
      background: #eff6ff;
      color: #1d4ed8;
      border: 1px solid #bfdbfe;
      font-size: 13px;
      font-weight: 600;
    }

    .editing-badge.show { display: block; }

    .table-wrap {
      overflow: auto;
      border-radius: 18px;
      border: 1px solid #e5ecf6;
      background: #fff;
    }

    table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
      min-width: 760px;
    }

    thead th {
      position: sticky;
      top: 0;
      z-index: 1;
      text-align: left;
      padding: 15px 16px;
      background: linear-gradient(180deg, #f8fbff, #eef4ff);
      color: #334155;
      font-size: 13px;
      letter-spacing: .04em;
      text-transform: uppercase;
      border-bottom: 1px solid #e2e8f0;
    }

    tbody td {
      padding: 14px 16px;
      border-bottom: 1px solid #eef2f7;
      font-size: 14px;
      color: #0f172a;
      vertical-align: middle;
      background: #fff;
    }

    tbody tr:hover td {
      background: #f8fbff;
    }

    .empty {
      text-align: center;
      padding: 34px 16px;
      color: var(--muted);
    }

    .actions {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
    }

    .id-pill, .tag {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 30px;
      padding: 0 11px;
      border-radius: 999px;
      font-size: 13px;
      font-weight: 700;
    }

    .id-pill {
      background: #eef2ff;
      color: #4338ca;
    }

    .tag {
      background: #ecfeff;
      color: #0e7490;
    }

    .footer-actions {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      margin-top: 18px;
    }

    .small-note {
      margin-top: 12px;
      font-size: 12px;
      color: var(--muted);
    }

    .skeleton {
      height: 14px;
      border-radius: 10px;
      background: linear-gradient(90deg, #edf2f7 25%, #f8fbff 37%, #edf2f7 63%);
      background-size: 400% 100%;
      animation: shimmer 1.4s ease infinite;
    }

    @keyframes shimmer {
      0% { background-position: 100% 0; }
      100% { background-position: 0 0; }
    }

    @media (max-width: 1080px) {
      .grid { grid-template-columns: 1fr; }
      .metrics { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }

    @media (max-width: 640px) {
      .content { padding: 14px; }
      .hero { padding: 20px; border-radius: 22px; }
      .panel-head, .panel-body { padding-left: 16px; padding-right: 16px; }
      .metrics { grid-template-columns: 1fr; }
      .toolbar { align-items: stretch; }
      .search-wrap { width: 100%; }
    }
  </style>
</head>
<body>
  <main class="content">
    <div class="page">
      <section class="hero">
        <div class="hero-top">
          <div>
            <div class="eyebrow">Client Registration • Smooth & Modern</div>
            <h1>Register clients with a cleaner, premium experience.</h1>
            <p>
              This page is designed for fast entry, clear feedback, and easy browsing of saved client records.
              It keeps the workflow simple while making the interface feel polished and pleasant to use.
            </p>
          </div>
          <div class="hero-actions">
            <a class="link-button primary" href="https://sunfra.com/farm/sunfra/index.php">
              <i class="fas fa-arrow-left"></i> Go Back
            </a>
            <a class="button secondary" href="https://sunfra.com/farm/sunfra/login/auto_batching_registration_web.php">
              <i class="fas fa-network-wired"></i> Register for Auto Batching
            </a>
            <button type="button" class="button secondary" id="refreshBtn">
              <i class="fas fa-arrows-rotate"></i> Refresh
            </button>
            <button type="button" class="button ghost" id="resetBtn">
              <i class="fas fa-eraser"></i> Clear Form
            </button>
          </div>
        </div>

        <div class="metrics">
          <div class="metric">
            <div class="label">Total Clients</div>
            <div class="value" id="totalCount">0</div>
            <div class="note">Loaded from the server</div>
          </div>
          <div class="metric">
            <div class="label">Visible Clients</div>
            <div class="value" id="visibleCount">0</div>
            <div class="note">Matches the current search</div>
          </div>
          <div class="metric">
            <div class="label">Last Action</div>
            <div class="value" id="lastAction">Ready</div>
            <div class="note">Shows the latest update</div>
          </div>
          <div class="metric">
            <div class="label">UI Mode</div>
            <div class="value">Premium</div>
            <div class="note">Responsive and easy to use</div>
          </div>
        </div>
      </section>

      <div class="grid">
        <section class="panel">
          <div class="panel-head">
            <h2>Register New Client</h2>
            <p>Enter the details below. The form is designed to feel simple and confident.</p>
          </div>
          <div class="panel-body">
            <div id="editingBadge" class="editing-badge">Editing existing client</div>

            <form id="clientForm" autocomplete="off">
              <input type="hidden" id="row_id" name="row_id">
              <div class="stack">
                <div class="field">
                  <label for="client_id">Client ID</label>
                  <input class="input" type="text" name="client_id" id="client_id" required placeholder="Enter client ID">
                  <div class="helper">Use the unique ID assigned to the client.</div>
                </div>

                <div class="field">
                  <label for="username">Username</label>
                  <input class="input" type="text" name="username" id="username" required placeholder="Enter username">
                  <div class="helper">This will be used for login or identification.</div>
                </div>

                <div class="field">
                  <label for="password">Password</label>
                  <input class="input" type="password" name="password" id="password" required placeholder="Enter password">
                  <div class="helper">Choose a strong password for the client.</div>
                </div>

                <div class="field">
                  <label for="company_name">Company Name</label>
                  <input class="input" type="text" name="company_name" id="company_name" required placeholder="Enter company name">
                  <div class="helper">Display name shown in the client list.</div>
                </div>
              </div>

              <div class="footer-actions">
                <button type="submit" class="button primary" id="saveBtn">
                  <i class="fas fa-floppy-disk"></i> Register Client
                </button>
                <button type="button" class="button ghost" id="cancelEditBtn">
                  <i class="fas fa-xmark"></i> Cancel Edit
                </button>
              </div>

              <div id="msg" class="status"></div>
              <div class="small-note">Tip: use search to quickly find a client before editing.</div>
            </form>
          </div>
        </section>

        <section class="panel">
          <div class="panel-head">
            <h2>Registered Clients</h2>
            <p>Search, review, and edit existing client records from the table below.</p>
          </div>
          <div class="panel-body">
            <div class="toolbar">
              <div class="search-wrap">
                <input class="search" type="search" id="searchBox" placeholder="Search client ID, username, or company">
              </div>
              <button type="button" class="button ghost small" id="showAllBtn">
                <i class="fas fa-list"></i> Show All
              </button>
            </div>

            <div class="table-wrap">
              <table id="clientsTable">
                <thead>
                  <tr>
                    <th style="width:100px;">Client ID</th>
                    <th>Username</th>
                    <th>Company Name</th>
                    <th style="width:140px;">Status</th>
                    <th style="width:140px;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="5" class="empty">
                      <div class="skeleton" style="width: 42%; margin: 0 auto 10px;"></div>
                      Loading clients...
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div id="tableMeta" class="small-note">Loading data from server...</div>
            <div class="footer-actions" style="justify-content: space-between; align-items: center;">
              <div class="small-note" id="pageInfo">Page 1 of 1</div>
              <div style="display:flex; gap:10px; flex-wrap:wrap;">
                <button type="button" class="button ghost small" id="prevPageBtn">
                  <i class="fas fa-chevron-left"></i> Prev
                </button>
                <button type="button" class="button ghost small" id="nextPageBtn">
                  Next <i class="fas fa-chevron-right"></i>
                </button>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/js/all.min.js" defer></script>
<script>
  const saveUrl = "https://sunfra.com/farm/sunfra/login/sunfra_client_registration_save.php";
  const jsonUrl = "https://sunfra.com/farm/sunfra/login/sunfra_client_json.php";

  const form = document.getElementById("clientForm");
  const msg = document.getElementById("msg");
  const tbody = document.querySelector("#clientsTable tbody");
  const searchBox = document.getElementById("searchBox");
  const totalCount = document.getElementById("totalCount");
  const visibleCount = document.getElementById("visibleCount");
  const lastAction = document.getElementById("lastAction");
  const tableMeta = document.getElementById("tableMeta");
  const editingBadge = document.getElementById("editingBadge");
  const saveBtn = document.getElementById("saveBtn");
  const refreshBtn = document.getElementById("refreshBtn");
  const resetBtn = document.getElementById("resetBtn");
  const cancelEditBtn = document.getElementById("cancelEditBtn");
  const showAllBtn = document.getElementById("showAllBtn");
  const prevPageBtn = document.getElementById("prevPageBtn");
  const nextPageBtn = document.getElementById("nextPageBtn");
  const pageInfo = document.getElementById("pageInfo");

  let allClients = [];
  let filteredClients = [];
  let currentPage = 1;
  const pageSize = 10;

  function escapeHtml(value) {
    return String(value ?? "")
      .replace(/&/g, "&amp;")
      .replace(/</g, "&lt;")
      .replace(/>/g, "&gt;")
      .replace(/"/g, "&quot;")
      .replace(/'/g, "&#39;");
  }

  function setStatus(text, type) {
    msg.textContent = text || "";
    msg.className = "status" + (type ? " " + type : "");
    if (!text) {
      msg.className = "status";
    }
  }

  function setLastAction(text) {
    lastAction.textContent = text;
  }

  function extractClients(payload) {
    if (Array.isArray(payload)) {
      return payload.flatMap(item => Array.isArray(item) ? item : [item]);
    }

    if (!payload || typeof payload !== "object") {
      return [];
    }

    for (const key of ["data", "clients", "result", "rows"]) {
      if (Array.isArray(payload[key])) {
        return payload[key].flatMap(item => Array.isArray(item) ? item : [item]);
      }
    }

    return Object.values(payload).flatMap(value => Array.isArray(value) ? value : []);
  }

  function resetForm() {
    form.reset();
    document.getElementById("row_id").value = "";
    editingBadge.classList.remove("show");
    setStatus("", "");
    setLastAction("Ready");
  }

  function applyFilter() {
    const term = searchBox.value.trim().toLowerCase();
    filteredClients = !term ? allClients : allClients.filter(client => {
      return [
        client.client_id,
        client.username,
        client.company_name,
        client.status
      ].some(value => String(value ?? "").toLowerCase().includes(term));
    });

    currentPage = 1;
    renderCurrentPage();
  }

  function renderCurrentPage() {
    const term = searchBox.value.trim();
    const totalVisible = filteredClients.length;
    const totalPages = Math.max(1, Math.ceil(totalVisible / pageSize));
    if (currentPage > totalPages) {
      currentPage = totalPages;
    }

    const startIndex = (currentPage - 1) * pageSize;
    const pageRows = filteredClients.slice(startIndex, startIndex + pageSize);

    visibleCount.textContent = totalVisible;
    pageInfo.textContent = `Page ${currentPage} of ${totalPages}`;
    prevPageBtn.disabled = currentPage <= 1;
    nextPageBtn.disabled = currentPage >= totalPages;

    if (!pageRows.length) {
      tbody.innerHTML = `
        <tr>
          <td colspan="5" class="empty">
            <div style="font-size:42px;margin-bottom:8px;">🗂️</div>
            <div style="font-weight:700;color:#0f172a;margin-bottom:4px;">No clients found</div>
            <div>Try another search term or register a new client.</div>
          </td>
        </tr>
      `;
      tableMeta.textContent = term ? `No results for "${searchBox.value.trim()}".` : "No records available.";
      return;
    }

    tbody.innerHTML = pageRows.map(client => `
      <tr>
        <td><span class="id-pill">${escapeHtml(client.client_id)}</span></td>
        <td>${escapeHtml(client.username)}</td>
        <td>${escapeHtml(client.company_name)}</td>
        <td><span class="tag">${escapeHtml(client.status ?? "Active")}</span></td>
        <td>
          <div class="actions">
            <button type="button" class="button ghost small edit-btn" data-client="${escapeHtml(encodeURIComponent(JSON.stringify(client)))}">
              Edit
            </button>
          </div>
        </td>
      </tr>
    `).join("");

    const startNumber = totalVisible === 0 ? 0 : startIndex + 1;
    const endNumber = Math.min(startIndex + pageSize, totalVisible);
    tableMeta.textContent = term
      ? `Showing ${startNumber}-${endNumber} of ${totalVisible} result(s) for "${term}".`
      : `Showing ${startNumber}-${endNumber} of ${totalVisible} client(s).`;
  }

  async function loadClients() {
    refreshBtn.disabled = true;
    saveBtn.disabled = true;
    tableMeta.textContent = "Loading data from server...";

    try {
      const response = await fetch(jsonUrl, { cache: "no-store" });
      if (!response.ok) {
        throw new Error(`HTTP ${response.status}`);
      }

      const data = await response.json();
      const clients = extractClients(data);

      allClients = clients;
      totalCount.textContent = allClients.length;
      filteredClients = allClients.slice();
      currentPage = 1;
      renderCurrentPage();
      setStatus(`Loaded ${allClients.length} client record(s).`, "success");
      setLastAction("Table loaded");
    } catch (error) {
      allClients = [];
      totalCount.textContent = "0";
      visibleCount.textContent = "0";
      tbody.innerHTML = `
        <tr>
          <td colspan="5" class="empty">
            <div style="font-size:42px;margin-bottom:8px;">⚠️</div>
            <div style="font-weight:700;color:#b91c1c;margin-bottom:4px;">Unable to load clients</div>
            <div>${escapeHtml(error.message)}</div>
          </td>
        </tr>
      `;
      setStatus(`Could not load clients: ${error.message}`, "error");
      tableMeta.textContent = "Load failed.";
    } finally {
      refreshBtn.disabled = false;
      saveBtn.disabled = false;
    }
  }

  function editClient(client) {
    document.getElementById("row_id").value = client.row_id || client.id || "";
    document.getElementById("client_id").value = client.client_id || "";
    document.getElementById("username").value = client.username || "";
    document.getElementById("password").value = "";
    document.getElementById("company_name").value = client.company_name || "";
    editingBadge.classList.add("show");
    editingBadge.textContent = `Editing client: ${client.username || client.client_id || ""}`;
    setStatus(`Editing ${client.username || client.client_id || "selected client"}.`, "success");
    setLastAction(`Editing ${client.client_id || "client"}`);
    window.scrollTo({ top: 0, behavior: "smooth" });
  }

  tbody.addEventListener("click", (event) => {
    const button = event.target.closest(".edit-btn");
    if (!button) return;
    const client = JSON.parse(decodeURIComponent(button.dataset.client));
    editClient(client);
  });

  form.addEventListener("submit", async (event) => {
    event.preventDefault();

    const payload = {
      row_id: document.getElementById("row_id").value.trim(),
      client_id: document.getElementById("client_id").value.trim(),
      username: document.getElementById("username").value.trim(),
      password: document.getElementById("password").value.trim(),
      company_name: document.getElementById("company_name").value.trim()
    };

    if (!payload.client_id || !payload.username || !payload.password || !payload.company_name) {
      setStatus("Please fill in all fields before submitting.", "error");
      return;
    }

    setStatus("Saving client...", "");
    saveBtn.disabled = true;

    try {
      const response = await fetch(saveUrl, {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(payload)
      });

      const result = await response.json();
      msg.textContent = result.message || "Registration complete.";
      msg.className = result.status === "success" ? "status success" : "status error";
      msg.style.display = "block";

      if (result.status === "success") {
        form.reset();
        document.getElementById("row_id").value = "";
        editingBadge.classList.remove("show");
        setLastAction(result.message || "Saved successfully");
        await loadClients();
        setTimeout(() => setStatus("", ""), 2500);
      }
    } catch (error) {
      setStatus("Server error. Please try again.", "error");
    } finally {
      saveBtn.disabled = false;
    }
  });

  searchBox.addEventListener("input", applyFilter);
  resetBtn.addEventListener("click", resetForm);
  cancelEditBtn.addEventListener("click", resetForm);
  refreshBtn.addEventListener("click", loadClients);
  showAllBtn.addEventListener("click", () => {
    searchBox.value = "";
    applyFilter();
  });
  prevPageBtn.addEventListener("click", () => {
    if (currentPage > 1) {
      currentPage -= 1;
      renderCurrentPage();
    }
  });
  nextPageBtn.addEventListener("click", () => {
    const totalPages = Math.max(1, Math.ceil(filteredClients.length / pageSize));
    if (currentPage < totalPages) {
      currentPage += 1;
      renderCurrentPage();
    }
  });

  loadClients();
</script>
</body>
</html>


